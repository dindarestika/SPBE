<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class ApiAgenda extends Controller
{
    //API untuk menampilkan indeks data
    public function index()
    {
        $data_agenda = Agenda::all();

        return response()->json([
            "status" => true,
            "message" => "Agenda",
            "data" => $data_agenda
        ], 200);
    }

    public function create(Request $req)
    {
        $data_agenda = new Agenda;
        $data_agenda -> jenisagenda_id = $req -> ijenisagenda_id;
        $data_agenda -> nama_acara = $req -> nama_acara;
        $data_agenda -> perihal = $req -> perihal;
        $data_agenda -> tanggal_acara = $req -> tanggal_acara;
        $data_agenda -> waktu_acara = $req -> waktu_acara;
        $data_agenda -> tempat_acara = $req -> tempat_acara;
        $data_agenda -> link_upload = $req -> link_upload;
        $data_agenda -> surat = $req -> surat;
        $result = $data_agenda -> save();
        if ($result)
        {
            return ["Data berhasil ditambahkan"];
        } else
        {
            return ["Data tidak berhasil ditambahkan"];
        }
    }

    public function Read($id)
    {
        $data_agenda = Agenda::findOrFail($id);

        return response()->json([
            'success' => true,
            'message' => 'Agenda',
            'data' => $data_agenda
        ], 200);
    }

    public function delete($id)
    {
        $data_agenda = Agenda::find($id);
        $result = $data_agenda -> delete();
        if ($result) 
        {
            return ["Data " .$id. " telah dihapus"];
        }
        else
        {
            return ["Data " .$id. " tidak bisa dihapus"];
        }        
    }

    public function update(Request $req)
    {
        $data_agenda = Agenda::find($req -> id);
        $data_agenda -> jenisagenda_id = $req -> ijenisagenda_id;
        $data_agenda -> nama_acara = $req -> nama_acara;
        $data_agenda -> perihal = $req -> perihal;
        $data_agenda -> tanggal_acara = $req -> tanggal_acara;
        $data_agenda -> waktu_acara = $req -> waktu_acara;
        $data_agenda -> tempat_acara = $req -> tempat_acara;
        $data_agenda -> link_upload = $req -> link_upload;
        $data_agenda -> surat = $req -> surat;
        $result = $data_agenda -> save();
        if ($result)
        {
            return ["Data " .$req -> id. " telah diubah"];
        } else
        {
            return ["Data " .$req -> id. "tidak bisa diubah"];
        }
    }
}