<?php

use App\Http\Controllers\villaController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\RiwayatController;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/test', function () {
    return view('layouts.app');
});

Route::get('/crud', function () {
    return view('crud');
});


Route::get('/test-admin', function () {
    return view('layouts.admin');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('villa',villaController::class);
Route::resource('identitas',IdentitasController::class);
Route::resource('pemesanan',PemesananController::class);
Route::resource('transaksi',TransaksiController::class);
Route::resource('riwayat',RiwayatController::class);




