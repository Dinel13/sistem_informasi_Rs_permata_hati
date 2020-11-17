<?php

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


Auth::routes(['verify' => true]);

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('verified');

Route::get('/admin', function () {
    return view('admin.Home');
});

Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index')->name('pegawai.index');

Route::get('/keuangan', 'App\Http\Controllers\KeuanganController@index')->name('uang.index');


Route::get('/gudang', 'App\Http\Controllers\GudangController@index')->name('gudang.index');


Route::get('/pasien', 'App\Http\Controllers\PasienController@index')->name('pasien.index');

Route::get('/kamar', [App\Http\Controllers\KamarsController::class, 'index'])->name('kamar.index');

Route::get('/tagihan', [App\Http\Controllers\TagihansController::class, 'index'])->name('tagihan.index');

Route::get('/dokter', [App\Http\Controllers\DokterController::class, 'index'])->name('dokter.index');

Route::get('/laboratory', [App\Http\Controllers\LaboratoriesController::class, 'index'])->name('lab.index');
