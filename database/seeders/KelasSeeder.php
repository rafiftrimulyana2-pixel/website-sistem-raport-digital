<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Kelas::insert([
    ['nama_kelas' => 'X MIPA 1', 'wali_kelas' => 'Risa Setyawan, S.Pd.'],
    ['nama_kelas' => 'X MIPA 2', 'wali_kelas' => 'Bambang S., S.Pd.'],
    ['nama_kelas' => 'X MIPA 3', 'wali_kelas' => 'Siti Aminah, S.Pd.'],
    ]);
    }
}
