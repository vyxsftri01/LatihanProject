<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\villaController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\identitas2Controller;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Villaroom;
use App\Http\Controllers\depanController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\deskripsiController;

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

Route::resource('/villaroom',depanController::class);

Route::resource('/hireath',detailController::class);

Route::resource('/about',deskripsiController::class);
// Route::get('/hireath', function () {
//     return view('user.hireath');
// });


Route::get('/test-admin', function () {
    return view('layouts.admin');
});

// Route::get('/villaroom', [App\Http\Controllers\UserVillaroom::class, 'index'])->name('villaroom');
Route::get('/create', function () {
    return view('review.create');
});

Route::get('/form', function () {
    return view('user.form');
});

Route::get('/readonly', function () {
    return view('user.readonly');
});

// Route::get('/review', function () {
//     return view('villa.create');
// });


Route::get('/index', function () {
    return view('admin.index');
});
    
Route::resource('villa',villaController::class);

Route::resource('pemesanan',PemesananController::class);
Route::resource('transaksi',TransaksiController::class);
Route::resource('riwayat',RiwayatController::class);
Route::resource('tentang',TentangController::class);
Route::resource('review',ReviewController::class);

Route::get('/create', function () {
    return view('pemesanan.create');
});

// Route::resource('villa', 'HomeController@halaman1');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'member', 'middleware' => ['auth', 'role:member']], function () {
    Route::get('/', function () {

        return view('/hireath');
    });
    
    Route::resource('identitas',identitas2Controller::class);
    Route::resource('pemesanan',PemesananController::class);
    Route::resource('transaksi',TransaksiController::class);
    Route::resource('tentang',TentangController::class);
    Route::resource('review',detailController::class);

    
    Route::get('/form', function () {
        return view('user.form');
    });
    Route::get('/review1', function () {
        return view('user.riview1');
    });
    
    
    Route::get('/about', function () {
        return view('user.about');
    });
    
});
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin|member']], function () {
    Route::get('/', function () {

        return view('admin.index');
    });
    
    Route::resource('villa',villaController::class);
    Route::resource('identitas',identitas2Controller::class);
    Route::resource('identitas',IdentitasController::class);
    Route::resource('pemesanan',PemesananController::class);
    Route::resource('transaksi',TransaksiController::class);
    Route::resource('riwayat',RiwayatController::class);
    Route::resource('tentang',TentangController::class);
    Route::resource('review',ReviewController::class);

    Route::get('/form2', function () {
        return view('user.form2');
    });
});








