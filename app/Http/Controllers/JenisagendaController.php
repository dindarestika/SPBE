<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenisagenda;
class JenisagendaController extends Controller
{
    public function index()
    {
        $data_jenisagenda = Jenisagenda::all();
        return view('jenisagenda.index',[
            "title" => "Jenis Agenda",
            'data_jenisagenda' => $data_jenisagenda]);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nama_jenis' => 'required',
        ]);  
        Jenisagenda::create($validatedData);
        return redirect('/jenisagenda')->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $jenisagenda = Jenisagenda::find($id);
        return view('jenisagenda/edit', [
            "title" => "Jenis Agenda",
            'jenisagenda' => $jenisagenda]);
    }
    public function update(Request $request, $id)
    {
        $jenisagenda = Jenisagenda::find($id);
        $jenisagenda->update($request->all());
        return redirect('/jenisagenda')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $jenisagenda = Jenisagenda::find($id);
        $jenisagenda->delete($jenisagenda);
        return redirect('/jenisagenda')->with('sukses', 'Data berhasil diupdate');
    }
}
