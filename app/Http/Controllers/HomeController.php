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
        return view('welcome', [
            "title" => "Home"
        ]);
    }
    public function tentang()
    {
        return view('Landingpage.tentang', [
            "title" => "Tentang"
        ]);
    }
    public function contact()
    {
        $kontak = Kontak::where('id', '1')->get();
        return view('Landingpage.contact', [
            "title" => "Contact",
            "kontak" => $kontak
        ]);
    }
    public function visimisi()
    {
        $visi = Visi::all();
        $misi = Misi::all();
        return view('Landingpage.visimisi', [
            "title" => "Tentang",
            "visi" => $visi,
            "misi" => $misi
        ]);
    }
    public function tujuansasaran()
    {
        $tujuan = Tujuan::all();
        $sasaran = Sasaran::all();
        return view('Landingpage.tujuansasaran', [
            "title" => "Tentang",
            "tujuan" => $tujuan,
            "sasaran" => $sasaran

        ]);
    }
    public function dasarhukum()
    {
        $dasarhukum = Dasarhukum::all();
        return view('Landingpage.dasarhukum', [
            "title" => "Tentang",
            "dasarhukum" => $dasarhukum,
        ]);
    }
    public function masterplan()
    {
        $masterplan = Masterplan::all();
        $jumlah_masterplan = Masterplan::all()->count();
        return view('Landingpage.masterplan', [
            "title" => "Tentang",
            "masterplan" => $masterplan,
            "jumlah_masterplan" => $jumlah_masterplan,
        ]);
    }
    public function infrastruktur()
    {
        $infrastruktur = Infrastruktur::all();
        $jumlah_infrastruktur = Infrastruktur::all()->count();
        return view('Landingpage.infrastruktur', [
            "title" => "Tentang",
            "infrastruktur" => $infrastruktur,
            "jumlah_infrastruktur" => $jumlah_infrastruktur,
        ]);
    }
    public function arsitektur()
    {
        return view('Landingpage.arsitektur', [
            "title" => "Tentang"
        ]);
    }
    public function lihatvisimisi()
    {
        return view('Landingpage.lihatvisimisi', [
            "title" => "Data Visi Misi"
        ]);
    }
    public function lihattujuansasaran()
    {
        return view('Landingpage.lihattujuansasaran', [
            "title" => "Data Tujuan Sasaran"
        ]);
    }
    public function datamisi()
    {
        $data_misi = Misi::all();
        return view('Landingpage.datamisi', [
            "title" => "Data Visi Misi",
            "misi" => $data_misi,
        ]);
    }
    public function datavisi()
    {
        $data_visi = Visi::all();
        return view('Landingpage.datavisi', [
            "title" => "Data Visi Misi",
            "visi" => $data_visi,
        ]);
    }
    public function datatujuan()
    {
        $data_tujuan = Tujuan::all();
        return view('Landingpage.datatujuan', [
            "title" => "Data Tujuan Sasaran",
            "tujuan" => $data_tujuan,
        ]);
    }
    public function datasasaran()
    {
        $data_sasaran = Sasaran::all();
        return view('Landingpage.datasasaran', [
            "title" => "Data Tujuan Sasaran",
            "sasaran" => $data_sasaran,
        ]);
    }
    public function datadasarhukum()
    {
        $data_dasarhukum = Dasarhukum::all();
        return view('Landingpage.datadasarhukum', [
            "title" => "Data Dasar Hukum",
            "dasarhukum" => $data_dasarhukum,
        ]);
    }
    public function datamasterplan()
    {
        $data_masterplan = Masterplan::all();
        return view('Landingpage.datamasterplan', [
            "title" => "Data Masterplan",
            "masterplan" => $data_masterplan,
        ]);
    }
    public function dataarsitektur()
    {
        $data_arsitektur = Arsitektur::all();
        return view('Landingpage.dataarsitektur', [
            "title" => "Data Arsitektur",
            "arsitektur" => $data_arsitektur,
        ]);
    }
    public function datainfrastruktur()
    {
        $data_infrastruktur = Infrastruktur::all();
        return view('Landingpage.datainfrastruktur', [
            "title" => "Data Infrastruktur",
            "infrastruktur" => $data_infrastruktur,
        ]);
    }
}
