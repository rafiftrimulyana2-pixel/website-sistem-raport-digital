<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // SEMUA KODE DALAM KURUNG KURAWAL FUNGSI RUN
        DB::table('siswa')->insert([
            [
                'nama_siswa' => 'Budi Santoso',
                'nisn' => '0012345678',
                'kelas' => 'X MIPA 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_siswa' => 'Siti Aminah',
                'nisn' => '0087654321',
                'kelas' => 'X MIPA 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    } // Penutup fungsi run
} // Penutup class
