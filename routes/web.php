<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

// Rute ini untuk halaman dashboard
Route::get('/dashboard', [SiswaController::class, 'dashboard']);

// Rute ini untuk menampilkan halaman form tambah
Route::get('/tambah_siswa', function () {
    return view('tambah_siswa');
});

// Rute ini untuk menerima kiriman data dari form
Route::post('/simpan-siswa', [SiswaController::class, 'store']);

// Rute ini untuk menginput suatu data jika terjadi kesalahan
Route::get('/siswa', [SiswaController::class, 'index']);

// Rute ini untuk menampilkan halaman edit (mengambil data lama)
Route::get('/siswa/hapus/{id}', [SiswaController::class, 'destroy']);

// Rute ini menampilkan halaman edit (mengambil data lama)
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);

// Rute ini untuk menyimpan perubahan data ke database
Route::post('/siswa/update/{id}', [SiswaController::class, 'update']);
