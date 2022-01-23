<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Infrastruktur;

class InfrastrukturController extends Controller
{
    public function infrastruktur() {
        $infrastruktur = Infrastruktur::all();       
        return view('infrastruktur.datainfrastruktur',[
            "title" => "infrastruktur",
            "infrastruktur" => $infrastruktur
        ]);
    }
}
