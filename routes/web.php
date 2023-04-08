<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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

Route::get('/kesiswaan', function () {
    return view('layouts.kesiswaan.app');
});
Route::get('/', function () {
    return view('auth.login');
});

Route::get('siswa/index', [App\Http\Controllers\SiswaController::class, 'index'])->name('siswa.index');
Route::get('siswa/create', [App\Http\Controllers\SiswaController::class, 'create'])->name('siswa.create');
Route::post('siswa/store', [App\Http\Controllers\SiswaController::class, 'store'])->name('siswa.store');

#rayon
Route::get('rayon/index', [App\Http\Controllers\RayonController::class, 'index'])->name('rayon.index');
Route::get('rayon/create', [App\Http\Controllers\RayonController::class, 'create'])->name('rayon.create');
Route::post('rayon/store', [App\Http\Controllers\RayonController::class, 'store'])->name('rayon.store');

