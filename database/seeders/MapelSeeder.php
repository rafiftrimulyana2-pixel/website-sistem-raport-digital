<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mapels')->insert([
            ['nama_mapel' => 'Matematika', 'kategori' => 'Eksak', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'Fisika', 'kategori' => 'Eksak', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'Kimia', 'kategori' => 'Eksak', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'Biologi', 'kategori' => 'Kesehatan', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'Ekonomi', 'kategori' => 'Sosial', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'Sosiologi', 'kategori' => 'Sosial', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
