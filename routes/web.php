<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SPPController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\TunggakanController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//pembayaran
Route::resource('/admin/pembayaran', PembayaranController::class);

//spp
Route::resource('/admin/spp', SPPController::class);


//kelas
Route::resource('/admin/kelas', KelasController::class);

//siswa
Route::resource('/admin/siswa', SiswaController::class);

//user
Route::resource('/admin/user', UserController::class);

//tunggakan
Route::resource('/admin/tunggakan', TunggakanController::class);




