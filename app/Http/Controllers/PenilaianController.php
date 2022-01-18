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
    public function skor($id)
    {
        $evaluasi = Evaluasi::find($id);
        $data_domain = Domain::where('evaluasi_id', $id)->get();
        //$data_domain = Domain::all();
        $data_aspek = Aspek::all();
        return view('penilaian.skor', [
            "title" => "Penilaian",
            'evaluasi' => $evaluasi,
            'data_domain' => $data_domain,
            'data_aspek' => $data_aspek,
        ]);
    }
    public function pertanyaanumum($id)
    {
        $evaluasi = Evaluasi::find($id);
        $pertanyaan_umum = PertanyaanUmum::all();
        $user = request()->user();
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
            'pertanyaan_umum' => $pertanyaan_umum,
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
                evaluasi.id AS id_evaluasi, d.nama_indikator, f.id AS id_opd,
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
        $data = Evaluasi::select(DB::raw('evaluasi.id AS id_evaluasi, d.id AS id_indikator, d.nama_indikator, b.nama_domain, c.nama_aspek, d.nama_indikator'))
            ->join('domain AS b', 'b.evaluasi_id', '=', 'evaluasi.id')
            ->join('aspek AS c', 'c.domain_id', '=', 'b.id')
            ->join('indikator AS d', 'd.aspek_id', '=', 'c.id')
            ->join('opd AS f', 'f.id', '=', 'd.opd_id')
            // ->where('evaluasi.id', $request->id_evaluasi)
            ->where('d.id', $request->id_indikator)
            ->where('f.id', request()->user()->opd_id)
            ->first();

        $pertanyaan = Pertanyaan::select(DB::raw('pertanyaan.*, b.id AS id_jawaban, b.jawaban_pertanyaan, b.capaian'))
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

        // foreach($request->bukti_dukung as $b)
        // {
        //     array_push($bukti, $b);
        // }


        // return $nilaicapaian;


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
}
