<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
use App\Models\Aspek;


class AspekController extends Controller
{
    public function index()
    {
        $data_aspek = Aspek::all();
        $data_domain = Domain::all();
        return view('aspek.index', [
            "title" => "Aspek",
            'data_aspek' => $data_aspek,
            'data_domain' => $data_domain
        ]);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'domain_id' => 'required',
            'no_aspek' => 'required',
            'nama_aspek' => 'required|max:255',
            'bobot_aspek' => 'required',
        ]);
        Aspek::create($validatedData);
        return back()->with('sukses', 'Data berhasil diinput');
    }
    public function update(Request $request, $id)
    {
        $aspek = Aspek::find($id);
        $aspek->update($request->all());
        return back()->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $aspek = Aspek::find($id);
        $aspek->delete($aspek);
        return back()->with('sukses', 'Data berhasil dihapus');
    }
}
