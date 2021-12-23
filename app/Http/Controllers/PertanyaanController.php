<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\Indikator;

class PertanyaanController extends Controller
{
    public function index()
    {
        $data_pertanyaan = Pertanyaan::all();
        $data_indikator = Indikator::all();
        return view('pertanyaan.index',[
            "title" => "Pertanyaan",
            'data_pertanyaan' => $data_pertanyaan,
            'data_indikator' => $data_indikator]);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'indikator_id' => 'required',
            'tingkat' => 'required',
            'kriteria' => 'required',
        ]);
        Pertanyaan::create($validatedData);
        return redirect('/pertanyaan')->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $indikator = Indikator::all();
        return view('pertanyaan/edit', [
            "title" => "Pertanyaan",
            'pertanyaan' => $pertanyaan,
            'indikator' => $indikator]);
    }
    public function update(Request $request, $id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->update($request->all());
        return redirect('/pertanyaan')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->delete($pertanyaan);
        return redirect('/pertanyaan')->with('sukses', 'Data berhasil dihapus');
    }
}
