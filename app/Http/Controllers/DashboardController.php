<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Opd;
use App\Models\Agenda;
class DashboardController extends Controller
{
    public function index()
    {
    
        $user = User::all()->count();
        $opd = Opd::all()->count();
        $agenda = Agenda::all()->count();
        $agendaterbaru = Agenda::orderBy('tanggal_acara', 'desc')->take(5)->get();
        $opdterbaru = Opd::orderBy('id', 'desc')->take(5)->get();
        return view('dashboard.index', [
            "title" => "Dashboard",
            'user' => $user,
            'opd' => $opd,
            'agenda' => $agenda,
            'agendaterbaru' => $agendaterbaru,
            'opdterbaru' => $opdterbaru
        ]);
    }
}
