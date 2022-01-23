<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluasi;
use App\Models\Domain;
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
    // public function datadomain($id)
    // {
    //     $evaluasi = Evaluasi::find($id);
    //     $data_domain = Domain::orderBy('evaluasi_id', $id)->get();
    //     return view('evaluasi.datadomain',[
    //         "title" => "Evaluasi",
    //         'data_evaluasi' => $data_evaluasi,
    //         'data_domain' => $data_domain,
    //     ]);
    // }
}
