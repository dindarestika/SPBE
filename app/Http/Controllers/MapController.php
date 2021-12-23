<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wifi;

class MapController extends Controller
{
    public function __construct()
    {
        $this->Wifi = new Wifi();
    }
    public function index()
    {
        return view('Landingpage.map',[
            "title" => "TIK"
        ]); 
    }
    public function titik()
    {
        $results=$this->Wifi->allData();   
        return json_encode($results);
    }
    public function lokasi($id)
    {
        $results=$this->Wifi->getLokasi($id);   
        return json_encode($results);
    }
}
