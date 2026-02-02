<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->create();

        User::factory()->create([
            'name' => 'Bu Risa',
            'email' => 'guru@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        // Baris ini untuk memanggil seeder siswa
        $this->call([
            KelasSeeder::class, // 1. Buat Kelas dulu (MIPA 1, 2, 3)
            MapelSeeder::class, // 2. Buat Mata Pelajaran (Matematika, Biologi, dll)
            SiswaSeeder::class, // 3. Masukkan Siswa ke dalam Kelas yang sudah ada
        ]);
    }
}
