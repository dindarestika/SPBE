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
        $data_evaluasi = Evaluasi::orderBy('tahun_evaluasi', 'desc')->get();
        return view('pertanyaan umum.index', [
            "title" => "Pertanyaan Umum",
            'data_pertanyaan' => $data_pertanyaan,
            'data_evaluasi' => $data_evaluasi,
        ]);
    }
    public function datapertanyaanumum($id, $nama)
    {
        $evaluasi = Evaluasi::find($id);
        $data_pertanyaan = PertanyaanUmum::where('evaluasi_id', $id)->orderBy('id', 'asc')->get();
        $data_opd = Opd::all();
        session(['evaluasi_id' => $id]);
        session(['nama_evaluasi' => $nama]);
        return view('pertanyaan umum.datapertanyaanumum', [
            "title" => "Pertanyaan Umum",
            'data_pertanyaan' => $data_pertanyaan,
            'evaluasi' => $evaluasi,
            'data_opd' => $data_opd,
        ]);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'evaluasi_id' => 'required',
            'opd_id' => 'required',
            'soal' => 'required',
        ]);
        PertanyaanUmum::create($validatedData);
        return back()->with('sukses', 'Data berhasil diinput');
    }
    public function update(Request $request, $id)
    {
        $pertanyaan = PertanyaanUmum::find($id);
        $pertanyaan->update($request->all());
        return back()->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $pertanyaan = PertanyaanUmum::find($id);
        $pertanyaan->delete($pertanyaan);
        return back()->with('sukses', 'Data berhasil dihapus');
    }
}
