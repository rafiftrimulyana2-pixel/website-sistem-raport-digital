<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{

    $data = [
        ['nama' => 'ADITYA PRAYOGA', 'nisn' => '22231001', 'kelas' => 'X MIPA 1'],
        ['nama' => 'ANNISA RAHMAWATI', 'nisn' => '22231002', 'kelas' => 'X MIPA 1'],
        ['nama' => 'ARIF BUDIMAN', 'nisn' => '22231003', 'kelas' => 'X MIPA 1'],
        ['nama' => 'BAMBANG PAMUNGKAS', 'nisn' => '22231004', 'kelas' => 'X MIPA 1'],
        ['nama' => 'CHANDRA KIRANA', 'nisn' => '22231005', 'kelas' => 'X MIPA 1'],
        ['nama' => 'DEDY KURNIAWAN', 'nisn' => '22231006', 'kelas' => 'X MIPA 1'],
        ['nama' => 'DEWI SARTIKA', 'nisn' => '22231007', 'kelas' => 'X MIPA 1'],
        ['nama' => 'EKO PRASETYO', 'nisn' => '22231008', 'kelas' => 'X MIPA 1'],
        ['nama' => 'FARHAN MAULANA', 'nisn' => '22231009', 'kelas' => 'X MIPA 1'],
        ['nama' => 'GITA PERMATA', 'nisn' => '22231010', 'kelas' => 'X MIPA 1'],
        ['nama' => 'HENDRA KUSUMA', 'nisn' => '22231011', 'kelas' => 'X MIPA 1'],
        ['nama' => 'INDAH LESTARI', 'nisn' => '22231012', 'kelas' => 'X MIPA 1'],
        ['nama' => 'JOKO SUSILO', 'nisn' => '22231013', 'kelas' => 'X MIPA 1'],
        ['nama' => 'KARTIKA PUTRI', 'nisn' => '22231014', 'kelas' => 'X MIPA 1'],
        ['nama' => 'LUKMAN HAKIM', 'nisn' => '22231015', 'kelas' => 'X MIPA 1'],
        ['nama' => 'MAYA SOPHIA', 'nisn' => '22231016', 'kelas' => 'X MIPA 1'],
        ['nama' => 'NANDA PRATAMA', 'nisn' => '22231017', 'kelas' => 'X MIPA 1'],
        ['nama' => 'OKTAVIA RAMADHANI', 'nisn' => '22231018', 'kelas' => 'X MIPA 1'],
        ['nama' => 'PUTRA WIGUNA', 'nisn' => '22231019', 'kelas' => 'X MIPA 1'],
        ['nama' => 'QORI ANGGRAINI', 'nisn' => '22231020', 'kelas' => 'X MIPA 1'],
        ['nama' => 'RAFLI TRMULYANA', 'nisn' => '22231021', 'kelas' => 'X MIPA 1'],
        ['nama' => 'SITI AMINAH', 'nisn' => '22231022', 'kelas' => 'X MIPA 1'],
        ['nama' => 'TAUFIK HIDAYAT', 'nisn' => '22231023', 'kelas' => 'X MIPA 1'],
        ['nama' => 'ULFA DWIYANTI', 'nisn' => '22231024', 'kelas' => 'X MIPA 1'],
        ['nama' => 'VINA PANDUWINATA', 'nisn' => '22231025', 'kelas' => 'X MIPA 1'],
        ['nama' => 'WIRA YUDHA', 'nisn' => '22231026', 'kelas' => 'X MIPA 1'],
        ['nama' => 'XENA GABRIELLA', 'nisn' => '22231027', 'kelas' => 'X MIPA 1'],
        ['nama' => 'YUDI ARDIYANTO', 'nisn' => '22231028', 'kelas' => 'X MIPA 1'],
        ['nama' => 'ZAHRA NURUL', 'nisn' => '22231029', 'kelas' => 'X MIPA 1'],
        ['nama' => 'ZULFIKAR ALI', 'nisn' => '22231030', 'kelas' => 'X MIPA 1'],
    ];
foreach ($data as $item) {
    \App\Models\Siswa::updateOrCreate(
        ['nisn' => $item['nisn']], // Mencari berdasarkan NISN agar tidak ada data ganda
        [
            'nama_siswa' => $item['nama'],
            'kelas'      => $item['kelas'],
            'nisn'       => $item['nisn'],
            'kelas_id'   => 1,     // <--- PASTIKAN ADA TANDA KOMA DI SINI
        ]
        );
        }
    }
}
