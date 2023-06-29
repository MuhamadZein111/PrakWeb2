<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
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

// Route::get('/salam', function () {
//     return "Selamat Siang Pak Rojul";
// });

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

Route::group(['middleware' => ['auth']], function () {
    // praktikum 10 & 11
    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/produk', [ProdukController::class, 'index']);
        Route::get('/kategori', [KategoriProdukController::class, 'index']);
        Route::get('/pesanan', [PesananController::class, 'index']);

        // praktikum 12
        Route::get('/produk/create', [ProdukController::class, 'create']);
        Route::post('/produk/store', [ProdukController::class, 'store']);
        Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
        Route::post('/produk/update', [ProdukController::class, 'update']);
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

        Route::get('/kategori/create', [KategoriProdukController::class, 'create']);
        Route::post('/kategori/store', [KategoriProdukController::class, 'store']);
        Route::get('/kategori/edit/{id}', [KategoriProdukController::class, 'edit']);
        Route::post('/kategori/update', [KategoriProdukController::class, 'update']);
        Route::get('/kategori/delete/{id}', [KategoriProdukController::class, 'destroy']);

        Route::get('/pesanan/create', [PesananController::class, 'create']);
        Route::post('/pesanan/store', [PesananController::class, 'store']);
        Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);
        Route::post('/pesanan/update', [PesananController::class, 'update']);
        Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);
        Route::get('/logout', [DashboardController::class, 'logout']);
    });
});
Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

