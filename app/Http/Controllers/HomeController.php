<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wifi;

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
        return view('Landingpage.contact',[
            "title" => "Contact"]);
    }
    public function visimisi()
    {
        return view('Landingpage.visimisi',[
            "title" => "Tentang"]);
    }
    public function tujuansasaran()
    {
        return view('Landingpage.tujuansasaran',[
            "title" => "Tentang"]);
    }
    public function arsitektur()
    {
        return view('Landingpage.arsitektur',[
            "title" => "Tentang"]);
    }


}
