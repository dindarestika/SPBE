<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
use App\Models\Evaluasi;

class DomainController extends Controller
{
    public function index()
    {
        $data_domain = Domain::all();
        $data_evaluasi = Evaluasi::all();
        return view('domain.index', [
            "title" => "Domain",
            'data_domain' => $data_domain,
            'data_evaluasi' => $data_evaluasi,
        ]);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'evaluasi_id' => 'required',
            'no_domain' => 'required',
            'nama_domain' => 'required|max:255',
            'bobot_domain' => 'required',
        ]);
        Domain::create($validatedData);
        return back()->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $domain = Domain::find($id);
        $data_evaluasi = Evaluasi::all();
        return view('domain/edit', [
            "title" => "Evaluasi New",
            'domain' => $domain,
            'data_evaluasi' => $data_evaluasi,
        ]);
    }
    public function update(Request $request, $id)
    {
        $domain = Domain::find($id);
        $domain->update($request->all());
        return back()->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $domain = Domain::find($id);
        $domain->delete($domain);
        return back()->with('sukses', 'Data berhasil dihapus');
    }
}
