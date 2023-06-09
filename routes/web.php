<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriProdukController;

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

Route::get('/salam', function () {
    return "Selamat Siang Pak Rojul";
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Muhamad zein",
        "umur" => 20,
        "email" => "muhamadzein@gmail.com"
    ]);
});

Route::get('/nf', function () {
    return view('nf', [
        "nama" => "STT Terpadu Nurul Fikri",
        "lokasi" => "Depok",
    ]);
});
Route::get('/table', function () {
    return view('table');
});

// praktukum 9
Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']);
Route::get('/form', [FormController::class, 'index']);
Route::post('/form', [FormController::class, 'hasil']);

// praktikum 10 & 11
Route::prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/kategori', [KategoriProdukController::class, 'index']);
    Route::get('/pesanan', [PesananController::class, 'index']);
});
