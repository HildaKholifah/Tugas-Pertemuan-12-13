<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KontakController;

// Halaman utama diarahkan ke Mahasiswa
Route::get('/', function () {
    return redirect('/mahasiswas');
});

// ===============================
// ROUTE MAHASISWA (CRUD AJAX)
// ===============================
Route::resource('mahasiswa', MahasiswaController::class)->except(['show']);
Route::get('/mahasiswa/get-data', [MahasiswaController::class, 'getData'])->name('mahasiswa.get-data');

// ===============================
// ROUTE KONTAK (CRUD NON-AJAX)
// ===============================
Route::resource('kontaks', KontakController::class);
