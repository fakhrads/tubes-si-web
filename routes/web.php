<?php

use App\Http\Controllers\RakController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
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
Route::prefix('rak')->group(function () {
    Route::get('/',[RakController::class, 'index'])->name('rak_buku');
});

Route::get('/', function () {
    return view('welcome');
});

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
