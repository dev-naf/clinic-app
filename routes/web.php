<?php

use App\Http\Controllers\LoginController;
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

// --  basic login controller | login, autentikasi  
Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'autheticate']);

Route::get('/', function () {
    return view('index');
});

//  =====  build purpose only !!, not production ! ====
Route::get('/barang', function () {
    return view('pages.barang.index');
});

// === PASIEN UI ===
Route::get('/datapasien', function () {
    return view('pages.pasien.index');
});
Route::get('/periksapasien', function () {
    return view('pages.pemeriksaan.index');
});
Route::get('/riwayatpasien', function () {
    return view('pages.riwayat-pasien.index');
});
// ==== TAGIHAN UI ===
Route::get('/pembayaran', function () {
    return view('pages.pembayaran.index');
});
Route::get('/pembelian', function () {
    return view('pages.pembelian.index');
});
Route::get('/laporanharian', function () {
    return view('pages.laporan-harian.index');
});
Route::get('/laporanbulanan', function () {
    return view('pages.laporan-bulanan.index');
});

