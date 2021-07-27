<?php

use App\Http\Controllers\RakController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KunjunganController;
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
Route::prefix('buku')->group(function () {
    Route::get('/',[BukuController::class, 'index'])->name('buku');
    Route::get('/rak',[RakController::class, 'index'])->name('rak_buku');
});

Route::prefix('anggota')->group(function () {
    Route::get('/',[AnggotaController::class, 'index'])->name('anggota');
});

Route::prefix('laporan')->group(function () {
    Route::get('/',[LaporanController::class, 'index'])->name('anggota');
});

Route::get('/',[KunjunganController::class, 'index'])->name('kunjungan');

Auth::routes();

#Route::middleware()->group(function () {
#    Route::get('/', function () {
#        // Uses first & second middleware...
#    });

#    Route::get('/user/profile', function () {
#        // Uses first & second middleware...
#    });
#});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
