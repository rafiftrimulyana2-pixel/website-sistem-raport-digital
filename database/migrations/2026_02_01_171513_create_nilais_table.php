<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
        // Menghubungkan ke tabel 'siswa' (sesuai nama tabel kamu)
        $table->foreignId('siswa_id')->constrained('siswa')->onDelete('cascade');
        // Menghubungkan ke tabel 'mapels'
        $table->foreignId('mapel_id')->constrained('mapels')->onDelete('cascade');
        $table->integer('skor_nilai'); // Untuk menyimpan angka nilai
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
