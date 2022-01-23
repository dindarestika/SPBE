<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $data_role = Role::all();
        return view('role.index',[
            "title" => "Role",
            'data_role' => $data_role]);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nama_role' => 'required|max:255|unique:role',
        ]);
        Role::create($validatedData);
        return redirect('/role')->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $role = Role::find($id);
        return view('role/edit', [
            "title" => "Role",
            'role' => $role]);
    }
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->update($request->all());
        return redirect('/role')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $role = Role::find($id);
        $role->delete($role);
        return redirect('/role')->with('sukses', 'Data berhasil dihapus');
    }
}
