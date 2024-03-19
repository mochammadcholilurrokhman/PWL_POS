<?php

use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Levelcontroller;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/level', [Levelcontroller::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [Usercontroller::class, 'index']);
Route::get('/user/tambah', [Usercontroller::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [Usercontroller::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [Usercontroller::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [Usercontroller::class, 'hapus']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');