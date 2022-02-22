<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\FasilitaskamarController;
use App\Http\Controllers\FasilitashotelController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\BuktiController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\KamarhotelController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\AdminController;

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
    return view('pemesanans.index');
});
Route::get('reservasis/searchreservasis', [ReservasiController::class, 'search'])->name('searchreservasis');
Route::get('reservasis/filterreservasis', [ReservasiController::class, 'filter'])->name('filterreservasis');
Route::resource('kamars', KamarController::class);
Route::resource('fasilitaskamars', FasilitaskamarController::class);
Route::resource('fasilitashotels', FasilitashotelController::class);
Route::resource('pemesanans', PemesananController::class);
Route::resource('reservasis', ReservasiController::class);
Route::resource('buktis', BuktiController::class);
Route::resource('cetaks', CetakController::class);
Route::resource('kamarhotel', KamarhotelController::class);
Route::resource('fasilitas', FasilitasController::class);
Route::resource('admin', AdminController::class);