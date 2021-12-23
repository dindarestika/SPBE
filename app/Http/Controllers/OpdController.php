<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opd;
class OpdController extends Controller
{
    public function index()
    {
        $data_opd = Opd::all();
        return view('opd.index',[
            "title" => "OPD",
            'data_opd' => $data_opd]);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nama_opd' => 'required|max:255|unique:opd',
            'email_opd' => 'required|email:dns|unique:opd',
            'telepon_opd' => 'required',
            'alamat_opd' => 'required'
        ]);
        Opd::create($validatedData);
        return redirect('/opd')->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $opd = Opd::find($id);
        return view('opd/edit', [
            "title" => "OPD",
            'opd' => $opd]);
    }
    public function update(Request $request, $id)
    {
        $opd = Opd::find($id);
        $opd->update($request->all());
        return redirect('/opd')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $opd = Opd::find($id);
        $opd->delete($opd);
        return redirect('/opd')->with('sukses', 'Data berhasil dihapus');
    }
}
