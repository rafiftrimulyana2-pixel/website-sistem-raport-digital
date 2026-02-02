<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    // 1. Hubungkan ke tabel 'kelas' di database kamu
    protected $table = 'kelas';

    // 2. Tentukan kolom mana saja yang boleh diisi (mass assignable)
    protected $fillable = ['nama_kelas', 'wali_kelas'];

    // 3. Matikan timestamps jika kamu tidak punya kolom created_at/updated_at di tabel kelas
    public $timestamps = false;
}
