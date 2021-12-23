<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Jenisagenda;

class AgendaController extends Controller
{
    public function index()
    {
        $data_agenda = Agenda::all();
        $data_jenisagenda = Jenisagenda::all();
        return view('agenda.index',[
            "title" => "Agenda",
            'data_agenda' => $data_agenda,
            'data_jenisagenda' => $data_jenisagenda]);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'jenisagenda_id' => 'required',
            'nama_acara' => 'required',
            'perihal' => 'required',
            'tanggal_acara' => 'required',
            'waktu_acara' => 'required',
            'tempat_acara' => 'required',
            'surat' => 'required|mimes:pdf',
        ]);  
        $validatedData['surat'] = $request->file('surat')->store('agenda-surat');
        $data_agenda = Agenda::create($validatedData);
        return redirect('/agenda')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $agenda = Agenda::find($id);
        $jenisagenda = Jenisagenda::all();
        return view('agenda/edit', [
            "title" => "Agenda",
            'agenda' => $agenda,
            'jenisagenda' => $jenisagenda]);
    }
    public function update(Request $request, $id)
    {
        $agenda = Agenda::find($id);
        $validatedData = $request->validate([
            'jenisagenda_id' => 'required',
            'nama_acara' => 'required',
            'perihal' => 'required',
            'tanggal_acara' => 'required',
            'waktu_acara' => 'required',
            'tempat_acara' => 'required',
            'surat' => 'mimes:pdf',
        ]);

        if($request->file('surat')){
            $validatedData['surat'] = $request->file('surat')->store('agenda-surat');
        }
        $agenda->update($validatedData);
        return redirect('/agenda')->with('sukses', 'Data berhasil diupdate');
    }
    public function detail($id)
    {
        $agenda = Agenda::find($id);
        return view('agenda.detail',[
            "title" => "Agenda",
            'agenda' => $agenda]);
    }
    public function delete($id)
    {
        $agenda = Agenda::find($id);
        $agenda->delete($agenda);
        return redirect('/agenda')->with('sukses', 'Data berhasil dihapus');
    }
    public function calender()
    {
        return view('agenda.calender',[
            "title" => "Agenda Admin"]);
    }

    public function jscalender()
    {
        $json= array();
        $data_agenda = Agenda::all();
        foreach($data_agenda as $da)
        {
            if($da['jenisagenda_id']=='1')
            {
                $json[]= array(
                    'backgroundColor' => 'rgba(58,87,232,0.2)',
                    'textColor' => 'rgba(58,87,232,1)',
                    'borderColor' => 'rgba(58,87,232,1)',
                    'title' => $da['nama_acara'],
                    'start' => $da['tanggal_acara'],
                    'url' => '/calender/'.$da['id'].'/detail'
                );
            }
            elseif($da['jenisagenda_id']=='2')
            {
                $json[]= array(
                    'backgroundColor' => 'rgba(8,130,12,0.2)',
                    'textColor' => 'rgba(8,130,12,1)',
                    'borderColor' => 'rgba(8,130,12,1)',
                    'title' => $da['nama_acara'],
                    'start' => $da['tanggal_acara'],
                    'url' => '/calender/'.$da['id'].'/detail'
                );
            }
            elseif($da['jenisagenda_id']=='3')
            {
                $json[]= array(
                    'backgroundColor' => 'rgba(206,32,20,0.2)',
                    'textColor' => 'rgba(206,32,20,1)',
                    'borderColor' => 'rgba(206,32,20,1)',
                    'title' => $da['nama_acara'],
                    'start' => $da['tanggal_acara'],
                    'url' => '/calender/'.$da['id'].'/detail'
                );
            }
            else
            {
                $json[]= array(
                    'backgroundColor' => 'rgba(108,117,125,0.2)',
                    'textColor' => 'rgba(108,117,125,1)',
                    'borderColor' => 'rgba(108,117,125,1)',
                    'title' => $da['nama_acara'],
                    'start' => $da['tanggal_acara'],
                    'url' => '/calender/'.$da['id'].'/detail'
                );
            }
        }
        echo json_encode($json);
    }
    public function detailcalender($id)
    {
        $agenda = Agenda::find($id);
        return view('agenda.detailcalender',[
            "title" => "Agenda Admin",
            'agenda' => $agenda]);
    }
}
