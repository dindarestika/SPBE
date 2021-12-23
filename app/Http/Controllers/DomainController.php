<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;

class DomainController extends Controller
{
    public function index()
    {
        $data_domain = Domain::all();
        return view('domain.index',[
            "title" => "Domain",
            'data_domain' => $data_domain]);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nama_domain' => 'required|max:255|unique:domain',
            'bobot_domain' => 'required|int',
        ]);
        Domain::create($validatedData);
        return redirect('/domain')->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $domain = Domain::find($id);
        return view('domain/edit', [
            "title" => "Domain",
            'domain' => $domain]);
    }
    public function update(Request $request, $id)
    {
        $domain = Domain::find($id);
        $domain->update($request->all());
        return redirect('/domain')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $domain = Domain::find($id);
        $domain->delete($domain);
        return redirect('/domain')->with('sukses', 'Data berhasil dihapus');
    }
}
