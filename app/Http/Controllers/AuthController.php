<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\User;
use App\Models\Role;
use App\Models\Opd;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('username', 'password'))){
            return redirect('/dashboard');
        }
        return redirect('/login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function index()
    {
        $data_user = User::all();
        $data_role = Role::all();
        $data_opd = Opd::all();
        return view('user.index',[
            "title" => "User",
            'data_user' => $data_user,
            'data_opd' => $data_opd,
            'data_role' => $data_role]);
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'role_id' => 'required',
            'opd_id' => 'required',
            'nama_user' => 'required|max:255',
            'email_user' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|min:5',
            'alamat_user' => 'required',
            'foto_user' => 'required|image|file'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['foto_user'] = $request->file('foto_user')->store('foto-user');
        $data_user = User::create($validatedData);
        return redirect('/user')->with('sukses', 'Data berhasil diinput');
        
    }
    public function edit($id)
    {
        $user = User::find($id);
        $data_role = Role::all();
        $data_opd = Opd::all();
        return view('user/edit', [
            "title" => "User",
            'user' => $user,
            'data_opd' => $data_opd,
            'data_role' => $data_role]);
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $validatedData = $request->validate([
            'role_id' => 'required',
            'opd_id' => 'required',
            'nama_user' => 'required|max:255',
            'email_user' => 'required',
            'username' => 'required',
            //'password' => 'required|min:5',
            'alamat_user' => 'required',
            'foto_user' => 'image|file'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        if($request->file('foto_user')){
            $validatedData['foto_user'] = $request->file('foto_user')->store('foto-user');
        }
        $user->update($validatedData);
        return redirect('/user')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete($user);
        return redirect('/user')->with('sukses', 'Data berhasil dihapus');
    }
    public function detail($id)
    {
        $user = User::find($id);
        return view('user.detail',[
            "title" => "User",
            'user' => $user]);
    }
    public function profile()
    {
        return view('auths/profile',[
            "title" => "Profile",
        ]);
    }
}
