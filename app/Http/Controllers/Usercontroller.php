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
        // $user = Usermodel::where('level_id', 2)->count();
        $user = Usermodel::firstOrNew(
            [
                'username' => 'manager33',
                'nama' => 'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],
        );
        $user->save();
        return view('user', ['data' => $user]);
    }           

}
        // Tambah data user dengan Elequent Model

        // $data = [

            // 'level_id' => 2,
            // 'username' => 'manager_tiga',
            // 'nama' => 'Manager 3',
            // 'password' => Hash::make('12345')

            // 'username' => 'Customer-1',
            // 'nama' => 'Pelanggan Pertama',
            // 'password' => Hash::make('12345'),
            // 'level_id' => 3
           
            // 'username' => 'customer 1',
            // 'nama' => 'Pelanggan',
            // 'password' => Hash::make('12345'),
            // 'level_id' => 3
            
       
        // ];
            // UserModel::create($data);
            // $user = UserModel::all();
            // return view('user', ['data' => $user]);


            // //  Usermodel::insert($data);
            // Usermodel::where('username', 'customer-1')->update($data);
            //  // COba akses model UserModel
            // $user = Usermodel::all();
            // return view('user', ['data' => $user]);

  