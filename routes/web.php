<?php

use App\Http\Controllers\PerkuliahanController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [PerkuliahanController::class, 'index'])->name('perkuliahan.index');
Route::get('/mahasiswa', [PerkuliahanController::class, 'mahasiswa'])->name('perkuliahan.mahasiswa');
Route::get('/create', [PerkuliahanController::class, 'create'])->name('perkuliahan.create');
Route::post('/store', [PerkuliahanController::class, 'store'])->name('perkuliahan.store');
Route::get('/mahasiswa_edit/{id}', [PerkuliahanController::class, 'mahasiswa_edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa_update/{id}', [PerkuliahanController::class, 'mahasiswa_update'])->name('mahasiswa.update');
Route::delete('/mahasiswa_destroy/{id}', [PerkuliahanController::class, 'mahasiswa_destroy'])->name('mahasiswa.destroy');

Route::get('/dosen', [PerkuliahanController::class, 'dosen'])->name('perkuliahan.dosen');
Route::get('/dosen_create', [PerkuliahanController::class, 'dosen_create'])->name('dosen.create');
Route::post('/dosen_store', [PerkuliahanController::class, 'dosen_store'])->name('dosen.store');
Route::get('/dosen_edit/{id}', [PerkuliahanController::class, 'dosen_edit'])->name('dosen.edit');
Route::put('/dosen_update/{id}', [PerkuliahanController::class, 'dosen_update'])->name('dosen.update');
Route::delete('/dosen_destroy/{id}', [PerkuliahanController::class, 'dosen_destroy'])->name('dosen.destroy');

Route::get('/matakuliah', [PerkuliahanController::class, 'matakuliah'])->name('perkuliahan.matakuliah');
Route::get('/matakuliah_create', [PerkuliahanController::class, 'matakuliah_create'])->name('matakuliah.create');
Route::post('/matakuliah_store', [PerkuliahanController::class, 'matakuliah_store'])->name('matakuliah.store');
Route::get('/matakuliah_edit/{id}', [PerkuliahanController::class, 'matakuliah_edit'])->name('matakuliah.edit');
Route::put('/matakuliah_update/{id}', [PerkuliahanController::class, 'matakuliah_update'])->name('matakuliah.update');
Route::delete('/matakuliah_destroy/{id}', [PerkuliahanController::class, 'matakuliah_destroy'])->name('matakuliah.destroy');

Route::get('/prodi', [PerkuliahanController::class, 'prodi'])->name('perkuliahan.prodi');
Route::get('/prodi_create', [PerkuliahanController::class, 'prodi_create'])->name('prodi.create');
Route::post('/prodi_store', [PerkuliahanController::class, 'prodi_store'])->name('prodi.store');
Route::get('/prodi_edit/{id}', [PerkuliahanController::class, 'prodi_edit'])->name('prodi.edit');
Route::put('/prodi_update/{id}', [PerkuliahanController::class, 'prodi_update'])->name('prodi.update');
Route::delete('/prodi_destroy/{id}', [PerkuliahanController::class, 'prodi_destroy'])->name('prodi.destroy');

