<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PetugasController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard/siswa', [SiswaController::class, 'index'])->name('index.siswa');
Route::post('/dashboard/siswa', [SiswaController::class, 'store'])->name('store.siswa');
Route::get('/dashboard/petugas', [PetugasController::class, 'index'])->name('index.petugas');
Route::post('/dashboard/petugas', [PetugasController::class, 'store'])->name('store.petugas');
Route::get('/dashboard/kelas', [KelasController::class, 'index'])->name('index.kelas');
Route::post('/dashboard/kelas', [KelasController::class, 'store'])->name('store.kelas');
Route::get('/dashboard/spp', [SppController::class, 'index'])->name('index.spp');
Route::post('/dashboard/spp', [SppController::class, 'store'])->name('store.spp');
