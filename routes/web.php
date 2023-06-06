<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//Route untuk menampilkan dashboard admin 
Route::get('/', [DashboardController::class,'index']);

// Route untuk menampilkan daftar pasien
Route::get('/pasien', [PasienController::class, 'index']);

//Route untuk menampilkan tambah pasien
Route::get('/pasien/create',[PasienController::class, 'create']);

//Route untuk memproses form tambah pasien
Route::post('/pasien', [PasienController::class, 'store']);

//Route untuk menampilkan form edit pasien
Route::get('/pasien/edit/{id}',[PasienController::class,'edit']);

//Rote untuk memproses form edit pasien
Route::put('/pasien/{id}',[PasienController::class, 'update']);

//Route untuk hapus pasien
Route::delete('pasien', [PasienController::class, 'destroy']);



// Route untuk menampilkan daftar pasien
Route::get('/dokter', [DokterController::class, 'index']);

//Route untuk menampilkan tambah pasien
Route::get('/dokter/create',[DokterController::class, 'create']);

//Route untuk memproses form tambah pasien
Route::post('/dokter', [DokterController::class, 'store']);


