<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanUmum;
use App\Models\Evaluasi;
use App\Models\Opd;
class PertanyaanUmumController extends Controller
{
    public function index()
    {
        $data_pertanyaan = PertanyaanUmum::all();
        $evaluasi = Evaluasi::all();
        $opd = Opd::all();
        return view('pertanyaan umum.index',[
            "title" => "Pertanyaan Umum",
            'data_pertanyaan' => $data_pertanyaan,
        ], [
            'opd' => $opd,
            'evaluasi' => $evaluasi
        ]);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'soal' => 'required',
            'evaluasi_id' => 'required',
            'opd_id' => 'required',
        ]);
        PertanyaanUmum::create($validatedData);
        return redirect('/pertanyaanumum')->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $pertanyaan = PertanyaanUmum::find($id);
        return view('pertanyaan umum/edit', [
            "title" => "Pertanyaan Umum",
            'pertanyaan' => $pertanyaan,
        ]);
    }
    public function update(Request $request, $id)
    {
        $pertanyaan = PertanyaanUmum::find($id);
        $pertanyaan->update($request->all());
        return redirect('/pertanyaanumum')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $pertanyaan = PertanyaanUmum::find($id);
        $pertanyaan->delete($pertanyaan);
        return redirect('/pertanyaanumum')->with('sukses', 'Data berhasil dihapus');
    }
}
