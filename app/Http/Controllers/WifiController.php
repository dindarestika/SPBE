<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wifi;

class WifiController extends Controller
{
    public function index()
    {
        $data_wifi = Wifi::all();
        return view('wifi.index',[
            "title" => "Wifi",
            'data_wifi' => $data_wifi]);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nama_wifi' => 'required|max:255|unique:wifi',
            'alamat_wifi' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);
        Wifi::create($validatedData);
        return redirect('/wifi')->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $wifi = Wifi::find($id);
        return view('wifi/edit', [
            "title" => "Wifi",
            'wifi' => $wifi]);
    }
    public function update(Request $request, $id)
    {
        $wifi= Wifi::find($id);
        $wifi->update($request->all());
        return redirect('/wifi')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $wifi= Wifi::find($id);
        $wifi->delete($wifi);
        return redirect('/wifi')->with('sukses', 'Data berhasil dihapus');
    }
}
