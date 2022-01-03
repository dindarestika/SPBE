<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wifi;
use App\Models\Visi;
use App\Models\Misi;
use App\Models\Tujuan;
use App\Models\Sasaran;
use App\Models\Dasarhukum;
use App\Models\Masterplan;
use App\Models\Infrastruktur;
use App\Models\Arsitektur;
use App\Models\Kontak;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome',[
            "title" => "Home"]);
    }
    public function tentang()
    {
        return view('Landingpage.tentang',[
            "title" => "Tentang"]);
    }
    public function contact()
    {
        $kontak = Kontak::where('id','1')->get();
        return view('Landingpage.contact',[
            "title" => "Contact",
            "kontak" => $kontak
        ]);
    }
    public function visimisi()
    {
        $visi = Visi::all();
        $misi = Misi::all();
        return view('Landingpage.visimisi',[
            "title" => "Tentang",
            "visi" => $visi,
            "misi" => $misi
        ]);
    }
    public function tujuansasaran()
    {
        $tujuan = Tujuan::all();
        $sasaran = Sasaran::all();
        return view('Landingpage.tujuansasaran',[
            "title" => "Tentang",
            "tujuan" => $tujuan,
            "sasaran" => $sasaran

        ]);
    }
    public function dasarhukum()
    {
        $dasarhukum = Dasarhukum::all();
        return view('Landingpage.dasarhukum',[
            "title" => "Tentang",
            "dasarhukum" => $dasarhukum,
        ]);
    }
    public function masterplan()
    {
        $masterplan = Masterplan::all();
        $jumlah_masterplan = Masterplan::all()->count();
        return view('Landingpage.masterplan',[
            "title" => "Tentang",
            "masterplan" => $masterplan,
            "jumlah_masterplan" => $jumlah_masterplan,
        ]);
    }
    public function infrastruktur()
    {
        $infrastruktur = Infrastruktur::all();
        $jumlah_infrastruktur = Infrastruktur::all()->count();
        return view('Landingpage.infrastruktur',[
            "title" => "Tentang",
            "infrastruktur" => $infrastruktur,
            "jumlah_infrastruktur" => $jumlah_infrastruktur,
        ]);
    }
    public function arsitektur()
    {
        return view('Landingpage.arsitektur',[
            "title" => "Tentang"]);
    }


}
