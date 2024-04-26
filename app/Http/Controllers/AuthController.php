<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index() {
        // kita ambil data user lalu simpan pada variable Suser
        $user = Auth::user();

        // kondisi jika user nya ada
        if ($user) {    
            // jika user nya memiliki level admin
            if ($user->level_id = '1') {
            return redirect()->intended('admin');
            }
            // jika user nya memiliki level manager
            else if ($user->level == '2') {
            return redirect()->intended('manager');
            }
        }   
        return view('login');
    }

    public function proses_login(Request $request) {

        // kita buat validasi pada saat tombol login di klik
        // validas nya username & password wajib di isi
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // ambil data request username & password saja
        $credential = $request->only('username', 'password');
        // cek jika data username dan password valid (sesuai) dengan data
        if (Auth :: attempt($credential)) {

            // kalau berhasil simpan data user ya di variabel $user
            $user = Auth::user ();

            // cek lagi jika level user admin maka arahkan ke halaman admin
            if ($user->level_id == '1') {
            //dd(suser->level_id);
                return redirect()->intended('admin');
            }
            // tapi jika level user nya user biasa maka arahkan ke halaman user
            else if ($user->level_id == '2') {
                return redirect()->intended('manager');
            }
            // jika belum ada role maka ke halaman /
            return redirect()->intended('/');
        }
        // Jika ga ada data user yang valid maka kembalikan lagi ke halaman login
        // Pastikan kirim pesan error juga kalau login gagal ya
        return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'Patikan kembali username dan password yang di sesuaikan sudah benar']);
    }

    public function register() {
        // Tampilkan view register
        return view('register');
    }

    public function proses_register(Request $request) { 
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required'|'unique:m_user',
            'password' => 'required'
        ]);

        //Kalau gagal kembali ke halaman register dengan munculkan pesan eror
        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        // Kalau berhasil isi level & hash passwordnya
        $request['level_id'] = '2';
        $request['password'] = Hash::make($request->password);

        // Masukkan semua data pada request ke table user
        UserModel::create($request->all());

        // Kalo berhasil arahkan kehalaman login
        return redirect()->route('login');
    }

    public function logout(Request $request) {
        //Logout itu harus menghaous sessionnya
        $request->session()->flush();

        // Jalankan juga fungsi logout pada auth
        Auth::logout();

        //kembali kan ke halaman login
        return Redirect('login');
    }
}