<?php

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

Route::prefix('/level')->group(function () {
    Route::get('/', [\App\Http\Controllers\LevelController::class, 'index'])->name('/level');
    Route::get('/create', [\App\Http\Controllers\LevelController::class, 'create'])->name('/level/create');
    Route::post('/', [\App\Http\Controllers\LevelController::class, 'store']);
    Route::get('/update/{id}', [\App\Http\Controllers\LevelController::class, 'update'])->name('/level/update');
    Route::put('/update_simpan/{id}', [\App\Http\Controllers\LevelController::class, 'update_simpan'])->name('/level/update_simpan');
    Route::get('/hapus/{id}', [\App\Http\Controllers\LevelController::class, 'hapus'])->name('/level/hapus');
});
Route::prefix('/kategori')->group(function () {
    Route::get('/', [\App\Http\Controllers\KategoriController::class, 'index'])->name('/kategori');
    Route::get('/create', [\App\Http\Controllers\KategoriController::class, 'create'])->name('/kategori/create');
    Route::post('/', [\App\Http\Controllers\KategoriController::class, 'store']);
    Route::get('/update/{id}', [\App\Http\Controllers\KategoriController::class, 'update'])->name('/kategori/update');
    Route::put('/update_simpan/{id}', [\App\Http\Controllers\KategoriController::class, 'update_simpan'])->name('/kategori/update_simpan');
    Route::get('/hapus/{id}', [\App\Http\Controllers\KategoriController::class, 'hapus'])->name('/kategori/hapus');
});
Route::prefix('/user')->group(function () {
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index']);
    Route::get('/tambah', [\App\Http\Controllers\UserController::class, 'tambah']);
    Route::post('/tambah_simpan', [\App\Http\Controllers\UserController::class, 'tambah_simpan']);
    Route::get('/ubah/{id}', [\App\Http\Controllers\UserController::class, 'ubah']);
    Route::put('/ubah_simpan/{id}', [\App\Http\Controllers\UserController::class, 'ubah_simpan']);
    Route::get('/hapus/{id}', [\App\Http\Controllers\UserController::class, 'hapus']);
});
Route::resource('m_user', \App\Http\Controllers\POSController::class);