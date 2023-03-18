<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SPPController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PembayaranController;


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
// Route::get('/spp/create', [SPPController::class, 'create'])->name('spp.create');
// Route::post('/spp/create', [SPPController::class, 'store'])->name('spp.store');
// Route::get('/spp/update/{id_spp}', [SPPController::class, 'edit'])->name('spp.edit');
// Route::post('/spp/update/{id}', [SPPController::class, 'update'])->name('spp.update');
// Route::get('/spp/delete{id}', [SPPController::class, 'destroy'])->name('spp.delete');

//kelas
Route::resource('/admin/kelas', KelasController::class);
// Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
// Route::post('/kelas/create', [KelasController::class, 'store'])->name('kelas.store');
// Route::get('/kelas/update/{id_kelas}', [KelasController::class, 'edit'])->name('kelas.edit');
// Route::post('/kelas/update/{id}', [KelasController::class, 'update'])->name('kelas.update');
// Route::get('/kelas/delete{id}', [KelasController::class, 'destroy'])->name('kelas.delete');

//siswa
Route::resource('/admin/siswa', SiswaController::class);
// Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
// Route::post('/siswa/create', [SiswaController::class, 'store'])->name('siswa.store');
// Route::get('/siswa/update/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
// Route::post('/siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
// Route::get('/siswa/delete{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');

//user
Route::resource('/admin/user', UserController::class);
// Route::get('/user/update/{id}', [UserController::class, 'edit'])->name('user.edit');
// Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
// Route::get('/user/delete{id}', [UserController::class, 'destroy'])->name('user.delete');



