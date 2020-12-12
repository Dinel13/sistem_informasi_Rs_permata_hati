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
Route::get('/keluar', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('keluar');

//Route::get('/admin', function () {
 //   return view('admin.Home');
//});
//pegawai
Route::resource('pegawai', 'PegawaiController');

//keuangan
Route::resource('keuangan', 'KeuanganController');

// Route::get('/keuangan', 'App\Http\Controllers\KeuanganController@index')->name('uang.index')->middleware('auth');

// Route::get('/gudang', 'App\Http\Controllers\GudangController@index')->name('gudang.index')->middleware('auth');

//pasien
// Route::get('/pasien', 'App\Http\Controllers\PasienController@index')->name('pasien.index')->middleware('auth');
Route::resource('pasien', 'PasienController');

//kamar
Route::resource('kamars', 'KamarsController');

//tagihan
Route::resource('tagihans', 'TagihansController');

//dokter
Route::get('/dokter', 'App\Http\Controllers\DokterController@index')->name('dokter.index')->middleware('auth');
Route::get('/dokter/create', [App\Http\Controllers\DokterController::class, 'create'])->name('dokter.create')->middleware('auth');
Route::get('/dokter/{dokter}', [App\Http\Controllers\DokterController::class, 'show'])->name('dokter.show')->middleware('auth');
Route::post('/dokter', 'App\Http\Controllers\DokterController@store')->name('dokter.store')->middleware('auth');
Route::delete('/dokter/{dokter}', [App\Http\Controllers\DokterController::class, 'destroy'])->name('dokter.destroy')->middleware('auth');
Route::get('/dokter/{dokter}/edit', 'App\Http\Controllers\DokterController@edit')->name('dokter.edit')->middleware('auth');
Route::patch('/dokter/{dokter}', 'App\Http\Controllers\DokterController@update')->name('dokter.update')->middleware('auth');

//lab
// Route::get('/laboratory', [App\Http\Controllers\LaboratoriesController::class, 'index'])->name('lab.index')->middleware('auth');

// (option) Route::resource('laboratory', 'LaboratoryController')->middleware('auth');
Route::resource('laboratory', 'LaboratoriesController');

//inpatients
Route::resource('inpatients', 'InpatientsController');

//outpatients
Route::resource('outpatients', 'OutpatientsController');
