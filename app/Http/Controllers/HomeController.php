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
        $arsitektur = Arsitektur::all();
        $jumlah_arsitektur = Arsitektur::all()->count();
        return view('Landingpage.arsitektur', [
            "title" => "Tentang",
            "arsitektur" => $arsitektur,
            "jumlah_arsitektur" => $jumlah_arsitektur,
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
    public function datakontak()
    {
        $data_kontak = Kontak::all();
        return view('Landingpage.datakontak', [
            "title" => "Kontak",
            "kontak" => $data_kontak,
        ]);
    }

    public function createvisi(Request $request)
    {
        $validatedData = $request->validate([
            'visi' => 'required|unique:visi',
        ]);
        Visi::create($validatedData);
        return back()->with('sukses', 'Data berhasil diinput');
    }
    public function editvisi($id)
    {
        $visi = Visi::find($id);
        return view('landingpage/datavisi_edit', [
            "title" => "Data Visi Misi",
            'visi' => $visi
        ]);
    }
    public function updatevisi(Request $request, $id)
    {
        $visi = Visi::find($id);
        $visi->update($request->all());
        return redirect('/datavisi')->with('sukses', 'Data berhasil diupdate');
    }
    public function deletevisi($id)
    {
        $visi = Visi::find($id);
        $visi->delete($visi);
        return back()->with('sukses', 'Data berhasil dihapus');
    }

    public function createmisi(Request $request)
    {
        $validatedData = $request->validate([
            'misi' => 'required|unique:misi',
        ]);
        Misi::create($validatedData);
        return back()->with('sukses', 'Data berhasil diinput');
    }
    public function editmisi($id)
    {
        $misi = Misi::find($id);
        return view('landingpage/datamisi_edit', [
            "title" => "Data Visi Misi",
            'misi' => $misi
        ]);
    }
    public function updatemisi(Request $request, $id)
    {
        $misi = Misi::find($id);
        $misi->update($request->all());
        return redirect('/datamisi')->with('sukses', 'Data berhasil diupdate');
    }
    public function deletemisi($id)
    {
        $misi = Misi::find($id);
        $misi->delete($misi);
        return back()->with('sukses', 'Data berhasil dihapus');
    }

    public function createtujuan(Request $request)
    {
        $validatedData = $request->validate([
            'tujuan' => 'required|unique:tujuan',
        ]);
        Tujuan::create($validatedData);
        return back()->with('sukses', 'Data berhasil diinput');
    }
    public function edittujuan($id)
    {
        $tujuan = Tujuan::find($id);
        return view('landingpage/datatujuan_edit', [
            "title" => "Data Tujuan Sasaran",
            'tujuan' => $tujuan
        ]);
    }
    public function updatetujuan(Request $request, $id)
    {
        $tujuan = Tujuan::find($id);
        $tujuan->update($request->all());
        return redirect('/datatujuan')->with('sukses', 'Data berhasil diupdate');
    }
    public function deletetujuan($id)
    {
        $tujuan = Tujuan::find($id);
        $tujuan->delete($tujuan);
        return back()->with('sukses', 'Data berhasil dihapus');
    }

    public function createsasaran(Request $request)
    {
        $validatedData = $request->validate([
            'sasaran' => 'required|unique:sasaran',
        ]);
        Sasaran::create($validatedData);
        return back()->with('sukses', 'Data berhasil diinput');
    }
    public function editsasaran($id)
    {
        $sasaran = Sasaran::find($id);
        return view('landingpage/datasasaran_edit', [
            "title" => "Data Tujuan Sasaran",
            'sasaran' => $sasaran
        ]);
    }
    public function updatesasaran(Request $request, $id)
    {
        $sasaran = Sasaran::find($id);
        $sasaran->update($request->all());
        return redirect('/datasasaran')->with('sukses', 'Data berhasil diupdate');
    }
    public function deletesasaran($id)
    {
        $sasaran = Sasaran::find($id);
        $sasaran->delete($sasaran);
        return back()->with('sukses', 'Data berhasil dihapus');
    }

    public function createdasarhukum(Request $request)
    {
        $validatedData = $request->validate([
            'nama_dasarhukum' => 'required|unique:dasarhukum',
            'link_dasarhukum' => 'required',
        ]);
        Dasarhukum::create($validatedData);
        return back()->with('sukses', 'Data berhasil diinput');
    }
    public function editdasarhukum($id)
    {
        $dasarhukum = Dasarhukum::find($id);
        return view('landingpage/datadasarhukum_edit', [
            "title" => "Data Dasar Hukum",
            'dasarhukum' => $dasarhukum
        ]);
    }
    public function updatedasarhukum(Request $request, $id)
    {
        $dasarhukum = Dasarhukum::find($id);
        $dasarhukum->update($request->all());
        return redirect('/datadasarhukum')->with('sukses', 'Data berhasil diupdate');
    }
    public function deletedasarhukum($id)
    {
        $dasarhukum = Dasarhukum::find($id);
        $dasarhukum->delete($dasarhukum);
        return back()->with('sukses', 'Data berhasil dihapus');
    }

    public function createmasterplan(Request $request)
    {
        $validatedData = $request->validate([
            'nama_masterplan' => 'required|unique:masterplan',
            'link_masterplan' => 'required',
        ]);
        Masterplan::create($validatedData);
        return back()->with('sukses', 'Data berhasil diinput');
    }
    public function editmasterplan($id)
    {
        $masterplan = Masterplan::find($id);
        return view('landingpage/datamasterplan_edit', [
            "title" => "Data Masterplan",
            'masterplan' => $masterplan
        ]);
    }
    public function updatemasterplan(Request $request, $id)
    {
        $masterplan = Masterplan::find($id);
        $masterplan->update($request->all());
        return redirect('/datamasterplan')->with('sukses', 'Data berhasil diupdate');
    }
    public function deletemasterplan($id)
    {
        $masterplan = Masterplan::find($id);
        $masterplan->delete($masterplan);
        return back()->with('sukses', 'Data berhasil dihapus');
    }

    public function createarsitektur(Request $request)
    {
        $validatedData = $request->validate([
            'nama_arsitektur' => 'required|unique:arsitektur',
            'link_arsitektur' => 'required',
        ]);
        Arsitektur::create($validatedData);
        return back()->with('sukses', 'Data berhasil diinput');
    }
    public function editarsitektur($id)
    {
        $arsitektur = Arsitektur::find($id);
        return view('landingpage/dataarsitektur_edit', [
            "title" => "Data Arsitektur",
            'arsitektur' => $arsitektur
        ]);
    }
    public function updatearsitektur(Request $request, $id)
    {
        $arsitektur = Arsitektur::find($id);
        $arsitektur->update($request->all());
        return redirect('/dataarsitektur')->with('sukses', 'Data berhasil diupdate');
    }
    public function deletearsitektur($id)
    {
        $arsitektur = Arsitektur::find($id);
        $arsitektur->delete($arsitektur);
        return back()->with('sukses', 'Data berhasil dihapus');
    }

    public function createinfrastruktur(Request $request)
    {
        $validatedData = $request->validate([
            'nama_infrastruktur' => 'required|unique:infrastruktur',
            'link_infrastruktur' => 'required',
        ]);
        Infrastruktur::create($validatedData);
        return back()->with('sukses', 'Data berhasil diinput');
    }
    public function editinfrastruktur($id)
    {
        $infrastruktur = Infrastruktur::find($id);
        return view('landingpage/datainfrastruktur_edit', [
            "title" => "Data Infrastruktur",
            'infrastruktur' => $infrastruktur
        ]);
    }
    public function updateinfrastruktur(Request $request, $id)
    {
        $infrastruktur = Infrastruktur::find($id);
        $infrastruktur->update($request->all());
        return redirect('/datainfrastruktur')->with('sukses', 'Data berhasil diupdate');
    }
    public function deleteinfrastruktur($id)
    {
        $infrastruktur = Infrastruktur::find($id);
        $infrastruktur->delete($infrastruktur);
        return back()->with('sukses', 'Data berhasil dihapus');
    }

    public function createkontak(Request $request)
    {
        $validatedData = $request->validate([
            'alamat' => 'required',
            'email' => 'required',
            'no_telephone' => 'required',
        ]);
        Kontak::create($validatedData);
        return back()->with('sukses', 'Data berhasil diinput');
    }
    public function editkontak($id)
    {
        $kontak = Kontak::find($id);
        return view('landingpage/datakontak_edit', [
            "title" => "Kontak",
            'kontak' => $kontak
        ]);
    }
    public function updatekontak(Request $request, $id)
    {
        $kontak = Kontak::find($id);
        $kontak->update($request->all());
        return redirect('/kontak')->with('sukses', 'Data berhasil diupdate');
    }
    public function deletekontak($id)
    {
        $kontak = Kontak::find($id);
        $kontak->delete($kontak);
        return back()->with('sukses', 'Data berhasil dihapus');
    }
}
