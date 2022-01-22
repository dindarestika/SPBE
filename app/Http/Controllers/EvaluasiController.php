<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluasi;
use App\Models\Domain;
use App\Models\Aspek;
use App\Models\Indikator;
use App\Models\Opd;
use App\Models\Pertanyaan;

class EvaluasiController extends Controller
{
    public function index()
    {
        $data_evaluasi = Evaluasi::all();
        return view('evaluasi.index', [
            "title" => "Evaluasi",
            'data_evaluasi' => $data_evaluasi
        ]);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nama_evaluasi' => 'required|max:255|unique:evaluasi',
            'tahun_evaluasi' => 'required|unique:evaluasi',
            'deskripsi_evaluasi' => 'required',
        ]);
        Evaluasi::create($validatedData);
        return redirect('/dataevaluasi')->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $evaluasi = Evaluasi::find($id);
        return view('evaluasi/edit', [
            "title" => "Penilaian Mandiri",
            'evaluasi' => $evaluasi
        ]);
    }
    public function update(Request $request, $id)
    {
        $evaluasi = Evaluasi::find($id);
        $evaluasi->update($request->all());
        return back()->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $evaluasi = Evaluasi::find($id);
        $evaluasi->delete($evaluasi);
        return back()->with('sukses', 'Data berhasil dihapus');
    }
    public function dataevaluasi()
    {
        $data_evaluasi = Evaluasi::orderBy('tahun_evaluasi', 'desc')->get();

        return view('evaluasi.dataevaluasi', [
            "title" => "Penilaian Mandiri",
            'data_evaluasi' => $data_evaluasi
        ]);
    }
    public function datadomain($id, $nama)
    {
        $evaluasi = Evaluasi::find($id);
        $data_domain = Domain::where('evaluasi_id', $id)->orderBy('no_domain', 'asc')->get();
        session(['evaluasi_id' => $id]);
        session(['nama_evaluasi' => $nama]);
        return view('evaluasi.datadomain', [
            "title" => "Penilaian Mandiri",
            'data_domain' => $data_domain,
            'evaluasi' => $evaluasi,
        ]);
    }
    public function dataaspek($id, $nama_evaluasi, $nama_domain)
    {
        $domain = Domain::find($id);
        $data_aspek = Aspek::where('domain_id', $id)->orderBy('no_aspek', 'asc')->get();
        session(['domain_id' => $id]);
        session(['nama_evaluasi' => $nama_evaluasi]);
        session(['nama_domain' => $nama_domain]);

        return view('evaluasi.dataaspek', [
            "title" => "Penilaian Mandiri",
            'data_aspek' => $data_aspek,
            'domain' => $domain,
        ]);
    }
    public function dataindikator($id, $nama_evaluasi, $nama_domain, $nama_aspek)
    {
        $aspek = Aspek::find($id);
        $data_indikator = Indikator::where('aspek_id', $id)->orderBy('no_indikator', 'asc')->get();
        $data_opd = Opd::all();

        session(['aspek_id' => $id]);
        session(['nama_evaluasi' => $nama_evaluasi]);
        session(['nama_domain' => $nama_domain]);
        session(['nama_aspek' => $nama_aspek]);

        return view('evaluasi.dataindikator', [
            "title" => "Penilaian Mandiri",
            'data_indikator' => $data_indikator,
            'aspek' => $aspek,
            'data_opd' => $data_opd,
        ]);
    }
    public function datapertanyaan($id, $nama_evaluasi, $nama_domain, $nama_aspek, $no_indikator)
    {
        $indikator = Indikator::find($id);
        $data_pertanyaan = Pertanyaan::where('indikator_id', $id)->orderBy('tingkat', 'asc')->get();

        session(['indikator_id' => $id]);
        session(['nama_evaluasi' => $nama_evaluasi]);
        session(['nama_domain' => $nama_domain]);
        session(['nama_aspek' => $nama_aspek]);
        session(['no_indikator' => $no_indikator]);

        return view('evaluasi.datapertanyaan', [
            "title" => "Penilaian Mandiri",
            'data_pertanyaan' => $data_pertanyaan,
            'indikator' => $indikator,
        ]);
    }
}
