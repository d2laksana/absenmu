<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KelasControlller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\GuruMiddleware;
use App\Http\Middleware\SiswaMiddleware;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});



// Route::resource('user', [UserController::class]);


Route::post('/login-post', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware([AuthMiddleware::class])->group(function () {
    Route::middleware([AdminMiddleware::class])->group(function () {
        // crud siswa
        Route::get('/siswa', [SiswaController::class, 'index']);
        Route::get('/siswa/create', [SiswaController::class, 'tambah']);
        Route::post('/siswa/simpan', [SiswaController::class, 'simpan']);
        Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
        Route::post('/siswa/update/{id}', [SiswaController::class, 'update']);
        Route::get('/siswa/hapus/{id}', [SiswaController::class, 'hapus']);
        
        // crud guru
        Route::get('/guru', [GuruController::class, 'index']);
        Route::get('/guru/create', [GuruController::class, 'tambah']);
        Route::post('/guru/simpan', [GuruController::class, 'simpan']);
        Route::get('/guru/edit/{id}', [GuruController::class, 'edit']);
        Route::post('/guru/update/{id}', [GuruController::class, 'update']);
        Route::get('/guru/hapus/{id}', [GuruController::class, 'hapus']);
        
        
        // crud mapel
        Route::get('/mapel', [MapelController::class, 'index']);
        Route::get('/mapel/create', [MapelController::class, 'tambah']);
        Route::post('/mapel/simpan', [MapelController::class, 'simpan']);
        Route::get('/mapel/edit/{id}', [MapelController::class, 'edit']);
        Route::post('/mapel/update/{id}', [MapelController::class, 'update']);
        Route::get('/mapel/hapus/{id}', [MapelController::class, 'hapus']);
        
        // crud kelas
        Route::get('/kelas', [KelasControlller::class, 'index']);
        Route::get('/kelas/create', [KelasControlller::class, 'tambah']);
      Route::post('/kelas/simpan', [KelasControlller::class, 'simpan']);
      Route::get('/kelas/edit/{id}', [KelasControlller::class, 'edit']);
      Route::post('/kelas/update/{id}', [KelasControlller::class, 'update']);
      Route::get('/kelas/hapus/{id}', [KelasControlller::class, 'hapus']);
      
      // crud jadwal
      Route::get('/jadwal', [JadwalController::class, 'index']);
      Route::get('/jadwal/create', [JadwalController::class, 'tambah']);
      Route::post('/jadwal/simpan', [JadwalController::class, 'simpan']);
      Route::get('/jadwal/edit/{id}', [JadwalController::class, 'edit']);
      Route::post('/jadwal/update/{id}', [JadwalController::class, 'update']);
      
      // crud user
      Route::get('/user', [UserController::class, 'index']);
      Route::get('/user/create', [UserController::class, 'tambah']);
      Route::post('/user/simpan', [UserController::class, 'simpan']);
      Route::get('/user/edit/{id}', [UserController::class, 'edit']);
      Route::post('/user/update/{id}', [UserController::class, 'update']);
      Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
    });
    Route::middleware([GuruMiddleware::class])->group(function () {
        Route::get('/generate/presensi', [PresensiController::class, 'index']);
        Route::get('/simpan-code-presensi', [PresensiController::class, 'simpan']);
        
    });
    Route::middleware([SiswaMiddleware::class])->group(function () {
        Route::get('/siswa/presensi', [PresensiController::class, 'presensiSiswa']);
        Route::get('/cekPresensi', [PresensiController::class, 'cekPresensi']);
    
    });
        // presensi
});
