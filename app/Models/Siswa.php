<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    // Tambahkan kolom sesuai yang ada dibawah tabel ini
    protected $table = 'siswa';

    protected $fillable = ['nisn', 'nama_siswa', 'kelas'];
}
