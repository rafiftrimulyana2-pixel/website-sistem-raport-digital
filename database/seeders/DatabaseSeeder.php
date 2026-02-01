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
        MapelSeeder::class,
        SiswaSeeder::class,
        ]);

        $this->call([
            MapelSeeder::class,
        ]);
    }
}
