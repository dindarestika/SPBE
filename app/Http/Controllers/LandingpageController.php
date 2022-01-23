<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Visi;
use App\Models\Misi;
use App\Models\Tujuan;
use App\Models\Sasaran;
use App\Models\Dasarhukum;
use App\Models\Masterplan;
use App\Models\Arsitektur;

class LandingpageController extends Controller
{
    public function index()
    {
        $visi = Visi::all();       
        return view('landingpage.visimisi.datavisi',[
            "title" => "visi",
            "visi" => $visi
        ]);
    }

    public function createvisi(Request $request)
    {
        $validatedData = $request->validate([
            'visi' => 'required',
        ]);  
        Visi::create($validatedData);
        return redirect('/datavisi');
    }

    public function editvisi($id)
    {
        $visi = Visi::find($id);
        // dd($data);
        return view('landingpage.visimisi.editvisi', compact('visi'));
    }

    public function updatevisi(Request $request, $id)
    {
        $visi = Visi::find($id);
        $validatedData = $request->validate([
            'visi' => 'required',
        ]);
        $visi->update($validatedData);
        return redirect('/datavisi');
    }

    public function deletevisi($id)
    {
        $visi = Visi::find($id);
        $visi->delete();
        return redirect()->route('landingpage.visimisi.datavisi');
    }

    public function misi()
    {
        $misi = Misi::all();       
        return view('landingpage.visimisi.datamisi',[
            "title" => "misi",
            "misi" => $misi
        ]);
    }

    public function createmisi(Request $request)
    {
        $validatedData = $request->validate([
            'misi' => 'required',
        ]);  
        Misi::create($validatedData);
        return redirect('/datamisi');
    }

    public function tujuan() {
        $tujuan = Tujuan::all();       
        return view('landingpage.tujuansasaran.datatujuan',[
            "title" => "tujuan",
            "tujuan" => $tujuan
        ]);
    }

    public function createtujuan(Request $request)
    {
        $validatedData = $request->validate([
            'tujuan' => 'required',
        ]);  
        Tujuan::create($validatedData);
        return redirect('/datatujuan');
    }

    public function sasaran() {
        $sasaran = sasaran::all();       
        return view('landingpage.tujuansasaran.datasasaran',[
            "title" => "sasaran",
            "sasaran" => $sasaran
        ]);
    }

    public function createsasaran(Request $request)
    {
        $validatedData = $request->validate([
            'sasaran' => 'required',
        ]);  
        Sasaran::create($validatedData);
        return redirect('/datasasaran');
    }

    public function dasarhukum() {
        $dasarhukum = Dasarhukum::all();       
        return view('landingpage.dasarhukum.datadasarhukum',[
            "title" => "dasarhukum",
            "dasarhukum" => $dasarhukum
        ]);
    }

    public function createdasarhukum(Request $request)
    {
        $validatedData = $request->validate([
            'nama_dasarhukum' => 'required',
            'link_dasarhukum' => 'required'
        ]);  
        Dasarhukum::create($validatedData);
        return redirect('/datadasarhukum');
    }

    public function createmasterplan(Request $request)
    {
        $validatedData = $request->validate([
            'nama_masterplan' => 'required',
            'link_masterplan' => 'required'
        ]);  
        Masterplan::create($validatedData);
        return redirect('/datamasterplan');
    }

    public function masterplan() {
        $masterplan = Masterplan::all();       
        return view('landingpage.masterplan.datamasterplan',[
            "title" => "masterplan",
            "masterplan" => $masterplan
        ]);
    }
}
