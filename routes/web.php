<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RombelController;

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
    return view('layouts.kesiswaan.app');
});


// DATA SISWA
Route::get('siswa/index', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('siswa/edit{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::post('siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::post('siswa/destroy/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

// DATA ROMBEL
Route::get('rombel/index', [RombelController::class, 'index'])->name('rombel.index');
Route::get('rombel/create', [RombelController::class, 'create'])->name('rombel.create');
Route::post('rombel/store', [RombelController::class, 'store'])->name('rombel.store');
Route::get('rombel/edit{id}', [RombelController::class, 'edit'])->name('rombel.edit');
Route::post('rombel/update/{id}', [RombelController::class, 'update'])->name('rombel.update');
Route::post('rombel/destroy/{id}', [RombelController::class, 'destroy'])->name('rombel.destroy');

// DATA RAYON
Route::get('rayon/index', [RayonController::class, 'index'])->name('rayon.index');
Route::get('rayon/create', [RayonController::class, 'create'])->name('rayon.create');
Route::post('rayon/store', [RayonController::class, 'store'])->name('rayon.store');
Route::get('rayon/edit{id}', [RayonController::class, 'edit'])->name('rayon.edit');
Route::post('rayon/update/{id}', [RayonController::class, 'update'])->name('rayon.update');
Route::post('rayon/destroy/{id}', [RayonController::class, 'destroy'])->name('rayon.destroy');

// DATA ABSEN
Route::get('mapel/index', [MapelController::class, 'index'])->name('mapel.index');
Route::get('mapel/create', [MapelController::class, 'create'])->name('mapel.create');
Route::post('mapel/store', [MapelController::class, 'store'])->name('mapel.store');