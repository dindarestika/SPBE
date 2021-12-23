<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
use App\Models\Aspek;
use App\Models\Indikator;

class IndikatorController extends Controller
{
    public function index()
    {
        $data_aspek = Aspek::all();
        $data_indikator = Indikator::all();
        return view('indikator.index',[
            "title" => "Indikator",
            'data_aspek' => $data_aspek,
            'data_indikator' => $data_indikator]);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'aspek_id' => 'required',
            'nama_indikator' => 'required|max:255|unique:indikator',
            'bobot_indikator' => 'required|int',
            'penjelasan_indikator' => 'required',
        ]);
        Indikator::create($validatedData);
        return redirect('/indikator')->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $indikator = Indikator::find($id);
        $aspek = Aspek::all();
        return view('indikator/edit', [
            "title" => "Indikator",
            'aspek' => $aspek,
            'indikator' => $indikator]);
    }
    public function update(Request $request, $id)
    {
        $indikator = Indikator::find($id);
        $indikator->update($request->all());
        return redirect('/indikator')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $indikator = Indikator::find($id);
        $indikator->delete($indikator);
        return redirect('/indikator')->with('sukses', 'Data berhasil dihapus');
    }
}
