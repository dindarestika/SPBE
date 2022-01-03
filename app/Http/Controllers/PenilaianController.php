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
class PenilaianController extends Controller
{
    public function index()
    {
        $data_evaluasi = Evaluasi::all();
        $pertanyaan = Pertanyaan::all();
        return view('penilaian.index',[
            "title" => "Penilaian",
            'data_evaluasi' => $data_evaluasi,
            'pertanyaan' => $pertanyaan,
        ]);
    }
    public function lihat()
    {
        return view('penilaian.detail',[
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
        $user=request()->user();
        $jawaban = JawabanUmum::where('user_id', $user->id)->get();
        $jawaban_umum = JawabanUmum::where('user_id', $user->id)->exists();
        if($jawaban_umum)
        {
            $status="ADA";
        }
        else{
            $status="TIDAK ADA";
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
        $user=request()->user();
        $evaluasi = Evaluasi::find($id);
        $indikator = Indikator::where('opd_id',$user->opd_id)->get();
        $items = Indikator::where('opd_id',$user->opd_id)->get();
        $data_domain = Domain::all();
        $data_aspek = Aspek::all();
        $jwb = Jawaban::all();
        $jawaban = Jawaban::where('user_id', $user->id)->exists();
        if($jawaban)
        {
            $status="ADA";
        }
        else{
            $status="TIDAK ADA";
        }
        return view('penilaian.mandiri', [
            "title" => "Penilaian",
            'evaluasi' => $evaluasi,
            'indikator' => $indikator,
            'items' => $items,
            'data_domain' => $data_domain,
            'data_aspek' => $data_aspek,
            'jawaban' => $jawaban,
            'jwb' => $jwb,
            'status' => $status,
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
        $userID=array();
        $ID=array();
        $pertanyaanID=array();
        $answer=array();
        
        foreach($request->user_id as $u)
        {
            array_push($userID, $u);
        }
        foreach($request->id as $d)
        {
            array_push($ID, $d);
        }
        foreach($request->pertanyaan_umum_id as $p)
        {
            array_push($pertanyaanID, $p);
        }
        foreach($request->jawaban as $j)
        {
            array_push($answer, $j);
        }
        
        for($i=0; $i<sizeof($pertanyaanID); $i++)
        {
            $jawab = JawabanUmum::find($ID[$i]);
            $jawab->user_id = $userID[$i];
            $jawab->jawaban = $answer[$i];
            $jawab->save();
        }
        return back()->with('sukses', 'Jawaban berhasil diupdate');

    }

    public function jawabanumum(Request $request)
    {

        $userID=array();
        $pertanyaanID=array();
        $answer=array();
        
        foreach($request->user_id as $u)
        {
            array_push($userID, $u);
        }
        foreach($request->pertanyaan_umum_id as $p)
        {
            array_push($pertanyaanID, $p);
        }
        foreach($request->jawaban as $j)
        {
            array_push($answer, $j);
        }
        
        for($i=0; $i<sizeof($pertanyaanID); $i++)
        {
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
        //return $request->capaian;

        $userID=array();
        $pertanyaanID=array();
        $answer=array();
        $nilaicapaian=array();
        //$bukti=array();
        
        foreach($request->user_id as $u)
        {
            array_push($userID, $u);
        }
        foreach($request->pertanyaan_id as $p)
        {
            array_push($pertanyaanID, $p);
        }
        foreach($request->jawaban as $key => $j)
        {
            if($request->capaian == $key+1)
            {
                $nilaicapaian[$key]=$key+1;
            }
            else
            {
                $nilaicapaian[$key]=0;
            }
            array_push($answer, $j);
        }
        
        // foreach($request->bukti_dukung as $b)
        // {
        //     array_push($bukti, $b);
        // }
        

           // return $nilaicapaian;

       
        for($i=0; $i<sizeof($pertanyaanID); $i++)
        {
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
    
}
