<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIRA-P | Detail Kelas</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">

<div class="flex h-screen overflow-hidden">
    <aside class="w-72 bg-[#0a113d] text-white flex flex-col shrink-0">
        <div class="p-8 text-2xl font-bold border-b border-blue-900/50 tracking-tight">
            SIRA-P
        </div>

        <nav class="mt-8 px-4 space-y-3 flex-1">
            <a href="/dashboard" class="flex items-center px-5 py-3.5 rounded-2xl transition-all group {{ request()->is('dashboard') ? 'bg-blue-600 text-white shadow-lg' : 'text-blue-300 hover:bg-blue-800/40 hover:text-white' }}">
                <i class="fas fa-layer-group mr-4 text-lg"></i>
                <span class="font-semibold text-sm">Dashboard</span>
            </a>
            <a href="/data_siswa" class="flex items-center px-5 py-3.5 rounded-2xl transition-all group {{ request()->is('data_siswa') ? 'bg-blue-600 text-white shadow-lg' : 'text-blue-300 hover:bg-blue-800/40 hover:text-white' }}">
                <i class="fas fa-user-graduate mr-4 text-lg group-hover:scale-110"></i>
                <span class="font-inter {{ request()->is('data_siswa') ? 'font-bold' : 'font-medium' }} uppercase">Data Siswa</span>
            </a>
            <a href="/input_nilai" class="flex items-center px-5 py-3.5 text-blue-300 hover:bg-blue-800/40 hover:text-white rounded-2xl transition-all group">
                <i class="fas fa-file-signature mr-4 text-lg group-hover:scale-110"></i>
                <span class="text-sm font-medium">Input Nilai Raport</span>
            </a>
            <a href="/rekomendasi" class="flex items-center px-5 py-3.5 text-blue-300 hover:bg-blue-800/40 hover:text-white rounded-2xl transition-all group">
                <i class="fas fa-chart-line mr-4 text-lg group-hover:scale-110"></i>
                <span class="text-sm font-medium">Analisis Rekomendasi</span>
            </a>
            <a href="/cetak" class="flex items-center px-5 py-3.5 text-blue-300 hover:bg-blue-800/40 hover:text-white rounded-2xl transition-all group">
                <i class="fas fa-print mr-4 text-lg group-hover:scale-110"></i>
                <span class="text-sm font-medium">Cetak / Export</span>
            </a>
        </nav>

        <div class="p-6 border-t border-blue-900/50">
            <a href="#" class="flex items-center px-5 py-3.5 text-blue-300 hover:bg-red-500/10 hover:text-red-400 rounded-2xl transition-all">
                <i class="fas fa-power-off mr-4 text-lg"></i>
                <span class="text-sm font-medium">Pengaturan / Keluar</span>
            </a>
        </div>
    </aside>

    <main class="flex-1 bg-[#f8fafc] min-h-screen overflow-y-auto">
        <header class="bg-white px-8 py-4 shadow-sm flex justify-between items-center">
            <h2 class="text-xl font-bold text-slate-800 tracking-tight">Data Siswa</h2>
            <div class="flex items-center gap-3">
                <span class="text-sm font-semibold text-slate-500">Risa Setyawan, S.Pd.</span>
                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">RS</div>
            </div>
        </header>

        <div class="p-8">
            <div class="flex flex-wrap gap-4 mb-6">
                <div class="bg-white px-4 py-2 rounded-lg border border-slate-200 text-xs font-bold text-slate-500 shadow-sm">Filter : Kelas X MIPA 1</div>
                <div class="bg-white px-4 py-2 rounded-lg border border-slate-200 text-xs font-bold text-slate-500 shadow-sm">Filter : Status Nilai (Semua)</div>
                <div class="bg-white px-4 py-2 rounded-lg border border-slate-200 text-xs font-bold text-slate-500 shadow-sm">Tahun Ajaran : 2025/2026</div>

                <div class="ml-auto flex gap-2">
                    <a href="{{ route('siswa.index') }}" class="bg-blue-500 text-white px-5 py-2 rounded-lg text-xs font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-200" inline-flex items-center gap-2 decoration-0">
                        <i class="fas fa-arrow-left"></i> Kembali Ke Halaman
                    </a>
                    <button class="bg-emerald-400 text-white px-5 py-2 rounded-lg text-xs font-bold hover:bg-emerald-600 transition shadow-lg shadow-emerald-200">Import Excel</button>
                    </a>
            </div>

            <div class="bg-white rounded-2xl shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden">
                <div class="p-6 border-b border-slate-100">
                    <h3 class="text-lg font-black text-slate-800 inter-bold">Daftar Siswa Kelas {{ $kelasTerpilih->nama_kelas }} ({{ $kelasTerpilih->siswas->count() }} Siswa)</h3>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse table-fixed">
                        <thead>
                            <tr class="bg-slate-50/50 border-b border-slate-100">
                                <th class="p-4 text-[11px] font-bold text-slate-400 uppercase tracking-wider text-center">No</th>
                                <th class="p-4 text-[11px] font-bold text-slate-400 uppercase tracking-wider">NIS/NISN</th>
                                <th class="p-4 text-[11px] font-bold text-slate-400 uppercase tracking-wider">Nama Lengkap</th>
                                <th class="p-4 text-[11px] font-bold text-slate-400 uppercase tracking-wider text-center w-16">L/P</th>
                                <th class="p-4 text-[11px] font-bold text-slate-400 uppercase tracking-wider text-center">Status Raport</th>
                                <th class="p-4 text-[11px] font-bold text-slate-400 uppercase tracking-wider text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-slate-100">
                            @forelse($semuaSiswa as $key => $siswa)
                            <tr class="hover:bg-slate-50/50 transition-all duration-200">
                                <td class="p-3 text-center font-bold text-slate-400 text-[10px]">{{ $key + 1 }}</td>
                                <td class="p-3 text-xs font-bold text-slate-500 tracking-tight">{{ $siswa->nisn }}</td>
                                <td class="p-3 text-xs font-bold text-slate-700 uppercase">{{ $siswa->nama_siswa }}</td>
                                <td class="p-3 text-center">
                                    @php
                                    // Sistem mendeteksi otomatis dari nama jika database kosong
                                    $nama = strtoupper($siswa->nama_siswa);
                                    // Daftar kata kunci nama perempuan
                                    $isP = preg_match('/(ANNISA|SITI|PUTRI|DEWI|GITA|KARTIKA|MAYA|OKTAVIA|AYU|LESTARI|ZAHRA|GITA|PERMATA)/', $nama);
                                    $jk = $isP ? 'P' : 'L';
                                    @endphp
                                    <span class="inline-block px-2.5 py-1 rounded-md text-[9px] font-bold {{ $jk == 'L' ? 'bg-blue-100 text-blue-600' : 'bg-rose-100 text-rose-600' }} border border-white shadow-sm shadow-slate-100">
                                        {{ $jk }}
                                    </span>
                                </td>

                                <td class="p-3">
                                    <div class="flex justify-center items-center">
                                        <span class="px-4 py-1 bg-emerald-400 text-white rounded-lg text-[9px] font-black uppercase tracking-wider border border-emerald-200 shadow-lg shadow-emerald-200/50 transition-all hover:scale-105">Lengkap</span>
                                    </div>
                                </td>
                                <td class="p-3 text-center">
                                    <a href="{{ route('siswa.show_detail', $siswa->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded-xl text-[10px] uppercase inter-bold">
                                        LIHAT DETAIL
                                    </a>
                                </td>

                                </tr>
                                @empty
                                <tr><td colspan="6" class="p-20 text-center text-slate-300 font-bold italic uppercase text-xs">Data belum dimuat.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="p-6 bg-slate-50/50 border-t border-slate-100 flex justify-between items-center">
                        <p class="text-[10px] font-bold text-slate-400 uppercase">... 30 data siswa lainnya dapat dilihat dengan menggulir</p>
                        <div class="flex gap-2">
                            <button class="px-4 py-2 bg-white border border-slate-200 rounded-lg text-[10px] font-bold text-slate-400 hover:bg-slate-50 uppercase shadow-sm">Previous</button>
                            <button class="px-4 py-2 bg-blue-500 rounded-lg text-[10px] font-bold text-white hover:bg-blue-700 uppercase shadow-md shadow-blue-200">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
