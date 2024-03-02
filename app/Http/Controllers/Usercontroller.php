<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Usermodel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index()
    {
        // Tambah data user dengan Elequent Model

        $data = [
            // 'username' => 'Customer-1',
            // 'nama' => 'Pelanggan Pertama',
            // 'password' => Hash::make('12345'),
            // 'level_id' => 3
           
            // 'username' => 'customer 1',
            // 'nama' => 'Pelanggan',
            // 'password' => Hash::make('12345'),
            // 'level_id' => 3             
        ];
            //  Usermodel::insert($data);
            Usermodel::where('username', 'customer-1')->update($data);
             // COba akses model UserModel
            $user = Usermodel::all();
            return view('user', ['data' => $user]);

    }
}
