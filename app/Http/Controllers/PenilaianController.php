<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Domain;
use App\Models\Aspek;
use App\Models\Evaluasi;
use App\Models\Pertanyaan;
use App\Models\PertanyaanUmum;
use App\Models\Indikator;
use App\Models\Jawaban;
use App\Models\JawabanUmum;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class PenilaianController extends Controller
{
    public function index()
    {
        $data_evaluasi = Evaluasi::all();
        $pertanyaan = Pertanyaan::all();
        return view('penilaian.index', [
            "title" => "Penilaian",
            'data_evaluasi' => $data_evaluasi,
            'pertanyaan' => $pertanyaan,
        ]);
    }
    public function lihat()
    {
        return view('penilaian.detail', [
            "title" => "Penilaian",
        ]);
    }
    public function detail($id)
    {
        //$domain = Domain::with('indikator')->get();
        $evaluasi = Evaluasi::find($id);
        $indikator = Indikator::all();
        $data_domain = Domain::all();
        $data_aspek = Aspek::all();
        $pertanyaan_umum = PertanyaanUmum::all();
        $jawaban_umum = JawabanUmum::all();
        //$pertanyaan = Pertanyaan::all();
        //$pertanyaan = Pertanyaan::where('indikator_id', $id)->get();
        return view('penilaian.detail', [
            "title" => "Penilaian",
            'evaluasi' => $evaluasi,
            //'domain' => $domain,
            'indikator' => $indikator,
            'data_domain' => $data_domain,
            'data_aspek' => $data_aspek,
            'pertanyaan_umum' => $pertanyaan_umum,
            'jawaban_umum' => $jawaban_umum,
            //'pertanyaan' => $pertanyaan,
        ]);
    }

    //     SELECT 
    // -- c.aspek_id, b.indikator_id, a.pertanyaan_id, a.jawaban_pertanyaan,
    // -- a.capaian ni, c.bobot_indikator bi,
    // -- (a.capaian * c.bobot_indikator) hasil_kali
    // -- SUM(a.capaian * c.bobot_indikator) jumlah,
    // 1 / e.bobot_aspek * SUM(a.capaian * c.bobot_indikator) AS indeks_aspek

    // FROM jawaban a
    // JOIN pertanyaan b ON b.id = a.pertanyaan_id
    // JOIN indikator c ON c.id = b.indikator_id
    // JOIN aspek e ON e.id = c.aspek_id
    // WHERE c.aspek_id = 9
    // -- HAVING ni != 0
    public function skor($id)
    {
        $evaluasi = Evaluasi::find($id);
        $data_domain = Domain::where('evaluasi_id', $id)->get();

        $data_aspek = Aspek::whereHas('domain.evaluasi', function (Builder $query) use ($id) {
            $query->where('evaluasi_id', $id);
        })->get();

        foreach ($data_aspek as $key => $value) {
            $indeks_aspek = @Jawaban::select(DB::raw('1 / d.bobot_aspek * SUM(jawaban.capaian * c.bobot_indikator) AS indeks_aspek'))
                ->join('pertanyaan AS b', 'b.id', '=', 'jawaban.pertanyaan_id', 'left')
                ->join('indikator AS c', 'c.id', '=', 'b.indikator_id', 'left')
                ->join('aspek AS d', 'd.id', '=', 'c.aspek_id', 'left')
                ->where('c.aspek_id', $value->id)
                ->first()->indeks_aspek;

            $value['indeks_aspek'] = $indeks_aspek;

            if ($indeks_aspek) {
                Aspek::where('id', $value->id)->update([
                    'indeks_aspek' => $indeks_aspek
                ]);
            }
        }

        foreach ($data_domain as $key => $value) {
            $indeks_domain = @Aspek::select(DB::raw('1 / b.bobot_domain * SUM(aspek.indeks_aspek * aspek.bobot_aspek) AS indeks_domain'))
                ->join('domain AS b', 'b.id', '=', 'aspek.domain_id', 'left')
                ->where('aspek.domain_id', $value->id)
                ->first()->indeks_domain;

            $value['indeks_domain'] = $indeks_domain;

            if ($indeks_domain) {
                Domain::where('id', $value->id)->update([
                    'indeks_domain' => $indeks_domain
                ]);
            }
        }

        $indeks_spbe = @Domain::select(DB::raw('1 / 100 * SUM(domain.indeks_domain * domain.bobot_domain) AS indeks_spbe'))
            ->join('evaluasi AS b', 'b.id', '=', 'domain.evaluasi_id', 'left')
            ->where('domain.evaluasi_id', $id)
            ->first()->indeks_spbe;
        if ($indeks_spbe) {
            Evaluasi::where('id', $id)->update([
                'indeks_spbe' => $indeks_spbe
            ]);
        }
        return view('penilaian.skor', [
            "title" => "Penilaian",
            'evaluasi' => $evaluasi,
            'data_domain' => $data_domain,
            'data_aspek' => $data_aspek,
            'indeks_spbe' => $indeks_spbe
        ]);
    }


    public function pertanyaanumum($id)
    {
        $user = request()->user();
        $evaluasi = Evaluasi::find($id);
        // $pertanyaan_umum =   PertanyaanUmum::all();
        $data = DB::select(
            "SELECT  e.id, a.nama_evaluasi,e.soal FROM `evaluasi` AS a
            LEFT JOIN pertanyaan_umum AS e ON e.evaluasi_id = a.id
            LEFT JOIN opd AS f ON f.id = e.opd_id
            WHERE a.id = $id AND f.id= $user->opd_id"
        );

        $jawaban = JawabanUmum::where('user_id', $user->id)->get();
        $jawaban_umum = JawabanUmum::where('user_id', $user->id)->exists();
        if ($jawaban_umum) {
            $status = "ADA";
        } else {
            $status = "TIDAK ADA";
        }
        return view('penilaian.pertanyaanumum', [
            "title" => "Penilaian",
            'evaluasi' => $evaluasi,
            'pertanyaan_umum' => $data,
            'jawaban' => $jawaban,
            'status' => $status,
        ]);
    }

    public function mandiri($id)
    {
        $user = request()->user();
        // SELECT f.nama_opd, a.nama_evaluasi, b.nama_domain, c.nama_aspek, d.nama_indikator, e.kriteria FROM `evaluasi` AS a
        // INNER JOIN domain AS b ON b.evaluasi_id = a.id
        // INNER JOIN aspek AS c ON c.domain_id = b.id
        // INNER JOIN indikator AS d ON d.aspek_id = c.id
        // INNER JOIN opd AS f ON f.id = d.opd_id
        // INNER JOIN pertanyaan AS e ON e.indikator_id = d.id
        // WHERE a.id = 1
        // 'users.id', '=', 'contacts.user_id'

        $data = Evaluasi::select(DB::raw('
                evaluasi.id AS id_evaluasi, d.nama_indikator, d.no_indikator, f.id AS id_opd,
                b.id AS id_domain, c.id AS id_aspek, d.id AS id_indikator,

                CASE 
                    WHEN (SELECT COUNT(*) FROM jawaban
                        WHERE pertanyaan_id IN (
                            SELECT id FROM pertanyaan
                            WHERE indikator_id = d.id
                        )) > 0
                    THEN "update"
                    ELSE "insert"
                END AS status
            '))->join('domain AS b', 'b.evaluasi_id', '=', 'evaluasi.id')
            ->join('aspek AS c', 'c.domain_id', '=', 'b.id')
            ->join('indikator AS d', 'd.aspek_id', '=', 'c.id')
            ->join('opd AS f', 'f.id', '=', 'd.opd_id')
            // ->join('pertanyaan AS e', 'e.indikator_id', '=', 'd.id')
            ->where('evaluasi.id', $id)
            ->where('f.id', $user->opd_id)
            ->get();

        // return response()->json($data);

        $evaluasi = Evaluasi::find($id);
        $indikator = Indikator::where('opd_id', $user->opd_id)->get();
        // $items = Indikator::where('opd_id',$user->opd_id)->get();
        // $jawaban = Jawaban::where('user_id', $user->id)->exists();
        // if($jawaban)
        // {
        //     $status="ADA";
        // }
        // else{
        //     $status="TIDAK ADA";
        // }


        return view('penilaian.mandiri', [
            "title" => "Penilaian",
            'evaluasi' => $evaluasi,
            'indikator' => $data,
            // 'items' => $items,
            // 'jawaban' => $jawaban,
            // 'status' => $status,
        ]);
    }

    public function ajax_get_pertanyaan(Request $request)
    {
        $data = Evaluasi::select(
            DB::raw('evaluasi.id AS id_evaluasi, d.id AS id_indikator, d.nama_indikator, d.no_indikator, b.nama_domain, c.nama_aspek, d.nama_indikator')
        )
            ->join('domain AS b', 'b.evaluasi_id', '=', 'evaluasi.id')
            ->join('aspek AS c', 'c.domain_id', '=', 'b.id')
            ->join('indikator AS d', 'd.aspek_id', '=', 'c.id')
            ->join('opd AS f', 'f.id', '=', 'd.opd_id')
            // ->where('evaluasi.id', $request->id_evaluasi)
            ->where('d.id', $request->id_indikator)
            ->where('f.id', request()->user()->opd_id)
            ->first();

        $pertanyaan = Pertanyaan::select(DB::raw('pertanyaan.*, b.id AS id_jawaban, IFNULL(b.jawaban_pertanyaan, " ") jawaban_pertanyaan, b.capaian'))
            ->where('indikator_id', $request->id_indikator)
            ->join('jawaban AS b', 'b.pertanyaan_id', '=', 'pertanyaan.id', 'left')
            ->get();

        return response()->json([
            'data' => $data,
            'pertanyaan' => $pertanyaan
        ]);
    }


    public function penilaianindikator($id)
    {
        $domain = Domain::with('indikator')->get();
        $evaluasi = Evaluasi::find($id);
        $indikator = Indikator::find($id);
        //$pertanyaan = Pertanyaan::all();
        //$pertanyaan = Pertanyaan::where('indikator_id', $id)->get();
        return view('penilaian.penilaianindikator', [
            "title" => "Penilaian",
            'evaluasi' => $evaluasi,
            'domain' => $domain,
            'indikator' => $indikator,
            //'pertanyaan' => $pertanyaan,
        ]);
    }
    public function updatejawabanumum(Request $request)
    {
        $userID = array();
        $ID = array();
        $pertanyaanID = array();
        $answer = array();

        foreach ($request->user_id as $u) {
            array_push($userID, $u);
        }
        foreach ($request->id as $d) {
            array_push($ID, $d);
        }
        foreach ($request->pertanyaan_umum_id as $p) {
            array_push($pertanyaanID, $p);
        }
        foreach ($request->jawaban as $j) {
            array_push($answer, $j);
        }

        for ($i = 0; $i < sizeof($pertanyaanID); $i++) {
            $jawab = JawabanUmum::find($ID[$i]);
            $jawab->user_id = $userID[$i];
            $jawab->jawaban = $answer[$i];
            $jawab->save();
        }
        return back()->with('sukses', 'Jawaban berhasil diupdate');
    }

    public function jawabanumum(Request $request)
    {

        $userID = array();
        $pertanyaanID = array();
        $answer = array();

        foreach ($request->user_id as $u) {
            array_push($userID, $u);
        }
        foreach ($request->pertanyaan_umum_id as $p) {
            array_push($pertanyaanID, $p);
        }
        foreach ($request->jawaban as $j) {
            array_push($answer, $j);
        }

        for ($i = 0; $i < sizeof($pertanyaanID); $i++) {
            $jawab = new JawabanUmum();
            $jawab->user_id = $userID[$i];
            $jawab->pertanyaan_umum_id = $pertanyaanID[$i];
            $jawab->jawaban = $answer[$i];
            $jawab->save();
        }
        return back()->with('sukses', 'Jawaban berhasil diinput');
    }

    public function jawabanpertanyaan(Request $request)
    {
        $userID = array();
        $pertanyaanID = array();
        $answer = array();
        $nilaicapaian = array();
        //$bukti=array();

        foreach ($request->user_id as $u) {
            array_push($userID, $u);
        }
        foreach ($request->pertanyaan_id as $p) {
            array_push($pertanyaanID, $p);
        }
        foreach ($request->jawaban as $key => $j) {
            if ($request->capaian == $key + 1) {
                $nilaicapaian[$key] = $key + 1;
            } else {
                $nilaicapaian[$key] = 0;
            }
            array_push($answer, $j);
        }

        for ($i = 0; $i < sizeof($pertanyaanID); $i++) {
            $jawab = new Jawaban();
            $jawab->user_id = $userID[$i];
            $jawab->pertanyaan_id = $pertanyaanID[$i];
            $jawab->jawaban_pertanyaan = $answer[$i];
            $jawab->capaian = $nilaicapaian[$i];
            $jawab->save();
        }
        return back()->with('sukses', 'Jawaban berhasil diinput');
        //return $nilaicapaian;
    }

    public function updatejawabanpertanyaan(Request $request)
    {
        $ID = array();
        $userID = array();
        $pertanyaanID = array();
        $answer = array();
        $nilaicapaian = array();

        foreach ($request->id as $d) {
            array_push($ID, $d);
        }
        foreach ($request->user_id as $u) {
            array_push($userID, $u);
        }
        foreach ($request->pertanyaan_id as $p) {
            array_push($pertanyaanID, $p);
        }
        foreach ($request->jawaban as $key => $j) {
            if ($request->capaian == $key + 1) {
                $nilaicapaian[$key] = $key + 1;
            } else {
                $nilaicapaian[$key] = 0;
            }
            array_push($answer, $j);
        }

        for ($i = 0; $i < sizeof($pertanyaanID); $i++) {
            $jawab = Jawaban::find($ID[$i]);
            $jawab->user_id = $userID[$i];
            $jawab->jawaban_pertanyaan = $answer[$i];
            $jawab->capaian = $nilaicapaian[$i];
            $jawab->save();
        }
        return back()->with('sukses', 'Jawaban berhasil diupdate');
    }
    public function load_grafik($id)
    {
        $data_aspek = Aspek::whereHas('domain.evaluasi', function (Builder $query) use ($id) {
            $query->where('evaluasi_id', $id);
        })->get();

        $nama = array();
        $index = array();
        foreach ($data_aspek as $n => $aspek) {
            $nama_aspek = $aspek->nama_aspek;
            array_push($nama, $nama_aspek);
            $indeks_aspek = $aspek->indeks_aspek;
            array_push($index, $indeks_aspek);
        }

        return response()->json([
            'status' => true,
            'data' => [
                'series' => [
                    [
                        'name' => 'Aspek SPBE Target',
                        'data' => [2.6, 2.6, 2.6, 2.6, 2.6, 2.6, 2.6, 2.6],
                    ], [
                        'name' => 'Aspek SPBE Indeks',
                        'data' => $index
                    ]
                ],
                'categories' => $nama
            ]
        ]);
    }
}
