<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

// Route ini untuk menampilkan halaman login
Route::get('/login', function () {
    return view('auth.login');
});

// Route ini untuk memproses data login
Route::post('/login', function (Illuminate\Http\Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
    }
    return back()->withErrors(['email' => 'Email atau password salah!']);
});

// Route ini untuk melihat jadwal agenda
Route::get('/agenda', function () {
    return view('agenda');
});

// Route ini untuk melihat tampilan data siswa
Route::get('/data_siswa', function () {
    return view('data_siswa');
});

// Route ini agar URL /input_nilai bisa diakses
Route::get('/input_nilai', function () {
    return view('input_nilai');
});

// Route ini untuk melihat tampilan analisis
Route::get('/rekomendasi', function () {
    return view('rekomendasi');
});
