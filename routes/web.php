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
    return view('layout.kesiswaan.index');
});
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/siswa/index', [App\Http\Controllers\SiswaController::class, 'index'])->name('siswa.index');