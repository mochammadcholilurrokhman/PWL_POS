<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usermodel;
use Illuminate\Support\Facades\Hash;
use App\DataTables\UserDataTable;

class UserController extends Controller
{
    function index(UserDataTable $dataTable)
    {
        return $dataTable->render('level.index');

    }

    // function tambah()
    // {
    //     return view('user_tambah');
    // }

    // function tambah_simpan(Request $request)
    // {
    //     User::create([
    //         'username' => $request->username,
    //         'nama' => $request->nama,
    //         'password' => Hash::make($request->password),
    //         'level_id' => $request->level_id,
    //     ]);

    //     return redirect('/user');
    // }

    // function ubah($id)
    // {
    //     $user = User::find($id);
    //     return view('user_ubah', ['data' => $user]);
    // }

    // function ubah_simpan($id,Request $request) {
    //     $user =User::find($id);

    //     $user->username = $request->username;
    //     $user->nama = $request->nama;
    //     $user->password = Hash::make($request->password);
    //     $user->level_id = $request->level_id;

    //     $user->save();

    //     return redirect('/user');
    // }

    // function hapus($id) {
    //     $user = User::find($id);
    //     $user->delete();

    //     return redirect('/user');
    // }
}