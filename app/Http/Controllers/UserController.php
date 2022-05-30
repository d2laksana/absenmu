<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        // dd($data);
        return view('admin.user.user', compact('data'));
    }

    public function tambah()
    {
        return view('admin.user.user-tambah');
    }

    public function simpan(Request $request)
    {
        User::create([
            'username' => $request->username,
            'password' => $request->password,
            'role' => $request->role
        ]);
        return redirect('/user');
    }

    public function edit($id)
    { 
        $data = User::find($id);
        return view('admin.user.user-edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        $data = User::find($id);
        $data->update([
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/user');
    }

    public function hapus($id)
    {
        $data = User::find($id);
        $data->delete();
        
        return redirect('/user');
    }
    
}
