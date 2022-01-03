<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluasi;
use App\Models\Domain;
use App\Models\Aspek;
use App\Models\Indikator;
use App\Models\Pertanyaan;
class EvaluasiController extends Controller
{
    public function index()
    {
        $data_evaluasi = Evaluasi::all();
        return view('evaluasi.index',[
            "title" => "Evaluasi",
            'data_evaluasi' => $data_evaluasi]);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nama_evaluasi' => 'required|max:255|unique:evaluasi',
            'tahun_evaluasi' => 'required|unique:evaluasi',
            'deskripsi_evaluasi' => 'required',
        ]);
        Evaluasi::create($validatedData);
        return redirect('/evaluasi')->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $evaluasi = Evaluasi::find($id);
        return view('evaluasi/edit', [
            "title" => "Evaluasi",
            'evaluasi' => $evaluasi]);
    }
    public function update(Request $request, $id)
    {
        $evaluasi = Evaluasi::find($id);
        $evaluasi->update($request->all());
        return redirect('/evaluasi')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $evaluasi = Evaluasi::find($id);
        $evaluasi->delete($evaluasi);
        return redirect('/evaluasi')->with('sukses', 'Data berhasil dihapus');
    }
    public function dataevaluasi()
    {
        // $data_evaluasi = Evaluasi::all();
        $data_evaluasi = Evaluasi::orderBy('tahun_evaluasi', 'asc')->get();
        return view('evaluasi.dataevaluasi',[
            "title" => "Evaluasi",
            'data_evaluasi' => $data_evaluasi]);
    }
    public function datadomain($id)
    {
        $evaluasi = Evaluasi::find($id);
        $data_domain = Domain::where('evaluasi_id', $id)->get();
        return view('evaluasi.datadomain',[
            "title" => "Evaluasi",
            'data_domain' => $data_domain,
        ]);
    }
    public function dataaspek($id)
    {
        $domain = Domain::find($id);
        $data_aspek = Aspek::where('domain_id', $id)->get();
        return view('evaluasi.dataaspek',[
            "title" => "Evaluasi",
            'data_aspek' => $data_aspek,
        ]);
    }
    public function dataindikator($id)
    {
        $aspek = Aspek::find($id);
        $data_indikator= Indikator::where('aspek_id', $id)->get();
        return view('evaluasi.dataindikator',[
            "title" => "Evaluasi",
            'data_indikator' => $data_indikator,
        ]);
    }
    public function datapertanyaan($id)
    {
        $indikator = Indikator::find($id);
        $data_pertanyaan= Pertanyaan::where('indikator_id', $id)->get();
        return view('evaluasi.datapertanyaan',[
            "title" => "Evaluasi",
            'data_pertanyaan' => $data_pertanyaan,
        ]);
    }
}
