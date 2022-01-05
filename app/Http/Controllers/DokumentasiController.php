<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumentasi;
use App\Models\Agenda;
use App\Models\Jenisagenda;
class DokumentasiController extends Controller
{
    public function index()
    {
        $dokumentasi = Dokumentasi::all();
        $agenda = Agenda::all();
        return view('dokumentasi.index',[
            "title" => "Dokumentasi",
            'dokumentasi' => $dokumentasi,
            'agenda' => $agenda]);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'agenda_id' => 'required',
            'notulen' => 'required|mimes:pdf',
            'surat' => 'required|mimes:pdf',
            'presensi' => 'required|mimes:pdf',
            'foto_acara' => 'required|mimes:jpeg,jpg,png',
            'tautan' => 'required',
        ]);
        $validatedData['notulen'] = $request->file('notulen')->store('dokumentasi-notulen');
        $validatedData['surat'] = $request->file('surat')->store('dokumentasi-surat');
        $validatedData['presensi'] = $request->file('presensi')->store('dokumentasi-presensi');
        $validatedData['foto_acara'] = $request->file('foto_acara')->store('dokumentasi-foto-acara');
        $validatedData['tautan'] = $request->tautan;
        $data_dokumentasi = Dokumentasi::create($validatedData);
        return redirect('/dokumentasi')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $dokumentasi = Dokumentasi::find($id);
        $agenda = Agenda::all();
        return view('dokumentasi/edit', [
            "title" => "Dokumentasi",
            'agenda' => $agenda,
            'dokumentasi' => $dokumentasi]);
    }
    public function update(Request $request, $id)
    {
        $dokumentasi = Dokumentasi::find($id);
        $validatedData = $request->validate([
            'agenda_id' => 'required',
            'notulen' => 'mimes:pdf',
            'surat' => 'mimes:pdf',
            'presensi' => 'mimes:pdf',
            'foto_acara' => 'mimes:jpeg,jpg,png',
            'tautan' => 'required',
        ]);

        if($request->file('notulen')){
            $validatedData['notulen'] = $request->file('notulen')->store('dokumentasi-notulen');
        }
        if($request->file('surat')){
            $validatedData['surat'] = $request->file('surat')->store('dokumentasi-surat');
        }
        if($request->file('presensi')){
            $validatedData['presensi'] = $request->file('presensi')->store('dokumentasi-presensi');
        }
        if($request->file('foto_acara')){
            $validatedData['foto_acara'] = $request->file('foto_acara')->store('dokumentasi-foto-acara');
        }
        if($request->tautan){
            $validatedData['tautan'] = $request->tautan;
        }
        $dokumentasi->update($validatedData);
        return redirect('/dokumentasi')->with('sukses', 'Data berhasil diupdate');
    }
    public function detail($id)
    {
        $dokumentasi = Dokumentasi::find($id);
        return view('dokumentasi.detail',[
            "title" => "Dokumentasi",
            'dokumentasi' => $dokumentasi]);
    }
    public function delete($id)
    {
        $dokumentasi = Dokumentasi::find($id);
        $dokumentasi->delete($dokumentasi);
        return redirect('/dokumentasi')->with('sukses', 'Data berhasil dihapus');
    }
}
