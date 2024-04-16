<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/',[UserController::class,'index']); 
    Route::post('/list',[UserController::class,'list']); 
    Route::get('/create',[UserController::class,'create']); 
    Route::post('/',[UserController::class,'store']); 
    Route::get('/{id}',[UserController::class,'show']); 
    Route::get('/{id}/edit',[UserController::class,'edit']); 
    Route::put('/{id}',[UserController::class,'update']); 
    Route::delete('/{id}',[UserController::class,'destroy']); 
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


Route::resource('m_user', \App\Http\Controllers\POSController::class);