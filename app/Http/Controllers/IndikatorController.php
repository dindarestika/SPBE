<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opd;
use App\Models\Domain;
use App\Models\Aspek;
use App\Models\Indikator;

class IndikatorController extends Controller
{
    public function index()
    {
        $data_aspek = Aspek::all();
        $data_indikator = Indikator::all();
        $data_opd = Opd::all();
        return view('indikator.index', [
            "title" => "Indikator",
            'data_aspek' => $data_aspek,
            'data_indikator' => $data_indikator,
            'data_opd' => $data_opd,
        ]);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'opd_id' => 'required',
            'aspek_id' => 'required',
            'no_indikator' => 'required',
            'nama_indikator' => 'required|max:255',
            'bobot_indikator' => 'required',
            'penjelasan_indikator' => 'required',
        ]);
        Indikator::create($validatedData);
        return back()->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $indikator = Indikator::find($id);
        $aspek = Aspek::all();
        $opd = Opd::all();
        return view('indikator/edit', [
            "title" => "Indikator",
            'opd' => $opd,
            'aspek' => $aspek,
            'indikator' => $indikator
        ]);
    }
    public function update(Request $request, $id)
    {
        $indikator = Indikator::find($id);
        $indikator->update($request->all());
        return back()->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $indikator = Indikator::find($id);
        $indikator->delete($indikator);
        return back()->with('sukses', 'Data berhasil dihapus');
    }
}
