<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Auth;
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
        if (Auth::attempt($request->only('username', 'password'))) {
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
        return view('user.index', [
            "title" => "User",
            'data_user' => $data_user,
            'data_opd' => $data_opd,
            'data_role' => $data_role
        ]);
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
            'data_role' => $data_role
        ]);
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

        if ($request->file('foto_user')) {
            $validatedData['foto_user'] = $request->file('foto_user')->store('foto-user');
        }
        $user->update($validatedData);
        return back()->with('sukses', 'Data berhasil diupdate');
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
        return view('user.detail', [
            "title" => "User",
            'user' => $user
        ]);
    }
    public function profile()
    {
        return view('auths/profile', [
            "title" => "Profile",
        ]);
    }
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     // $this->middleware('preventBackHistory');
    // }

    public function showChangePasswordForm()
    {
        $data_user = User::all();
        $data_role = Role::all();
        $data_opd = Opd::all();
        return view('auths.editprofil', [
            "title" => "Setting",
            'data_user' => $data_user,
            'data_opd' => $data_opd,
            'data_role' => $data_role
        ]);
    }

    public function changePassword(Request $request)
    {

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }
        if (!(strcmp($request->get('new-password'), $request->get('new-password-confirm'))) == 0) {
            return redirect()->back()->with("error", "New Password should be same as your confirmed password. Please retype new password.");
        }
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success", "Password changed successfully !");
    }
}
