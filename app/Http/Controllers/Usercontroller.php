<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Usermodel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Termwind\Components\Hr;

class Usercontroller extends Controller
{
    public function index()
    {
        $user = Usermodel::with('level')->get();
        dd($user);
        // $user = Usermodel::all();
        // return view('user', ['data' => $user]);
    }   
    public function tambah()
    {
        return view('user_tambah');
    }   
     function tambah_simpan(Request $request)
    {
        Usermodel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id,
        ]);

        return redirect('/user');
    }
    public function ubah($id)
    {
        $user = Usermodel::find($id);
        return view('user_ubah', ['data' => $user]);
    }
    public function ubah_simpan($id, Request $request)
    {
        $user = Usermodel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make($request->username);
        $user->level_id = $request->level_id;

        $user->save();

        return redirect('/user');
    }
    public function hapus($id)
    {
        $user = Usermodel::find($id);
        $user->delete();

        return redirect('/user');
    }

        //  $user = Usermodel::create(
        //     [
        //         'username' => 'manager11',
        //         'nama' => 'Manager11',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2,
        //     ]);

        //     $user->username = 'manager12';

        //     $user->save();

        //     $user->wasChanged();
        //     $user->wasChanged('username');
        //     $user->wasChanged(['username', 'level_id']);
        //     $user->wasChanged('nama');
        //     $user->wasChanged(['nama', 'username']);
        //     dd($user->wasChanged(['nama', 'username']));

        //  $user = Usermodel::create(
        //     [
        //         'username' => 'manager55',
        //         'nama' => 'Manager55',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ]);

        //     $user->username = 'manager56';

        //     $user->isDirty();
        //     $user->isDirty('username');
        //     $user->isDirty('nama');
        //     $user->isDirty(['nama', 'username']);

        //     $user->isClean();
        //     $user->isClean('username');
        //     $user->isClean('nama');
        //     $user->isClean(['nama', 'username']);

        //     $user->save();

        //     $user->isDirty();
        //     $user->isClean();
        //     dd($user->isDirty());

        // $user = Usermodel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'nama' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );
        // $user->save();
        // $user = Usermodel::firstOrNew(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager',
        //     ],
        // );
        //  $user = Usermodel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );
        // $user = Usermodel::firstOrCreate(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager',
        //     ],
        // );
        // $user = Usermodel::where('level_id', 2)->count();
        // dd($user);
        // $user = Usermodel::where('username', 'manager9')->firstOrFail();
        // $user = Usermodel::findOrFail(1);
        // $user = Usermodel::findOr(20, ['username', 'nama'], function (){
        //     abort(404);
        // });
        // $user = Usermodel::firstWhere('level_id', 1);        
        // $user = Usermodel::where('level_id', 1)->first();
        // $user = Usermodel::find(1);
       

}
      
        