<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisis Rekomendasi - E-Raport</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .glass { background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); }
        .neon-border-blue { box-shadow: 0 0 15px rgba(59, 130, 246, 0.5); }
    </style>
</head>
<body class="bg-gray-50 font-sans">

<div class="flex h-screen overflow-hidden">
    <aside class="w-72 bg-[#0a113d] text-white flex flex-col shrink-0">
        <div class="p-8 text-2xl font-bold border-b border-blue-900/50 tracking-tight">
            E-Raport Guru
        </div>

            <nav class="mt-8 px-4 space-y-3 flex-1">
                <a href="/dashboard" class="flex items-center px-5 py-3.5 rounded-2xl transition-all group {{ request()->is('dashboard') ? 'bg-blue-600 text-white shadow-lg neon-border-blue' : 'text-blue-300 hover:bg-blue-800/40' }}">
                    <i class="fas fa-layer-group mr-4 text-lg"></i>
                    <span class="text-sm font-bold uppercase">Dashboard</span>
                </a>

                <a href="/data_siswa" class="flex items-center px-5 py-3.5 rounded-2xl transition-all group {{ request()->is('data_siswa') ? 'bg-blue-600 text-white shadow-lg neon-border-blue' : 'text-blue-300 hover:bg-blue-800/40' }}">
                    <i class="fas fa-user-graduate mr-4 text-lg"></i>
                    <span class="text-sm font-bold uppercase">Data Siswa</span>
                </a>
                <a href="/input_nilai" class="flex items-center px-5 py-3.5 text-blue-300 hover:bg-blue-800/40 hover:text-white rounded-2xl transition-all group">
                    <i class="fas fa-file-signature mr-4 text-lg group-hover:scale-110"></i>
                    <span class="text-sm font-medium">Input Nilai Raport</span>
                </a>
                <a href="/rekomendasi" class="flex items-center px-5 py-3.5 rounded-2xl transition-all group {{ request()->is('rekomendasi') ? 'bg-blue-600 text-white shadow-lg neon-border-blue' : 'text-blue-300 hover:bg-blue-800/40' }}">
                    <i class="fas fa-chart-line mr-4 text-lg"></i>
                    <span class="text-sm font-bold uppercase">Analisis Rekomendasi</span>
                </a>
                <a href="#" class="flex items-center px-5 py-3.5 text-blue-300 hover:bg-blue-800/40 hover:text-white rounded-2xl transition-all group">
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

        <main class="flex-1 overflow-y-auto p-6 bg-slate-50">

    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-xl font-black text-slate-800 uppercase tracking-tighter">Analisis Rekomendasi</h2>
            <p class="text-[10px] font-bold text-slate-400">Tahun Ajaran 2025/2026 - Ganjil</p>
        </div>
        <div class="flex items-center gap-3 bg-white p-2 px-3 rounded-2xl shadow-sm border border-slate-100 scale-90 origin-right">
            <div class="text-right leading-tight">
                <p class="text-[10px] font-black text-slate-800 uppercase">Risa Setyawan, S.Pd.</p>
                <p class="text-[9px] font-bold text-blue-500 uppercase italic">Guru BK</p>
            </div>
            <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white font-black text-[10px]">RS</div>
        </div>
    </div>

    <div class="relative bg-gradient-to-r from-blue-700 to-indigo-600 rounded-[30px] p-8 text-white shadow-xl overflow-hidden mb-8">
        <div class="absolute -right-5 -top-5 w-48 h-48 bg-white/10 rounded-full blur-2xl"></div>
        <div class="relative z-10">
            <h1 class="text-2xl font-black mb-2 uppercase tracking-tighter">Analisis Masa Depan Siswa</h1>
            <p class="text-blue-100 text-[11px] max-w-xl mb-6 opacity-80 leading-snug">
                Gunakan algoritma cerdas untuk memetakan bakat dan jurusan kuliah siswa secara otomatis.
            </p>

            <div class="flex items-center bg-white rounded-xl p-1.5 shadow-lg max-w-md">
                <i class="fas fa-search text-slate-300 ml-3 text-xs"></i>
                <input type="text" placeholder="Cari NISN atau Nama..." class="flex-1 px-3 py-1 text-slate-600 text-[11px] outline-none bg-transparent font-bold">
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg font-black text-[9px] uppercase tracking-wider hover:bg-blue-700 transition-all">Cari</button>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

        <div class="group bg-white rounded-[25px] shadow-sm border border-slate-100 overflow-hidden hover:shadow-xl transition-all duration-300">
            <div class="bg-emerald-400 p-3 text-center">
                <h4 class="text-white font-black text-sm italic uppercase tracking-widest">X MIPA 1</h4>
            </div>
            <div class="p-5">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-[9px] font-black text-slate-400 uppercase">Siswa: 35</span>
                    <span class="text-[9px] font-black text-emerald-500 bg-emerald-50 px-2 py-0.5 rounded-md">Lengkap</span>
                </div>
                <div class="w-full h-1.5 bg-slate-50 rounded-full mb-5 overflow-hidden border border-slate-100">
                    <div class="h-full bg-emerald-400 w-full rounded-full"></div>
                </div>
                <button class="w-full py-2.5 bg-emerald-500 hover:bg-emerald-600 text-white rounded-xl font-black text-[9px] uppercase tracking-widest transition-all shadow-md shadow-emerald-100">Analisis</button>
            </div>
        </div>

        <div class="group bg-white rounded-[25px] shadow-sm border border-slate-100 overflow-hidden hover:shadow-xl transition-all duration-300">
            <div class="bg-blue-500 p-3 text-center">
                <h4 class="text-white font-black text-sm italic uppercase tracking-widest">X MIPA 2</h4>
            </div>
            <div class="p-5">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-[9px] font-black text-slate-400 uppercase">Siswa: 32</span>
                    <span class="text-[9px] font-black text-blue-500 bg-blue-50 px-2 py-0.5 rounded-md">Lengkap</span>
                </div>
                <div class="w-full h-1.5 bg-slate-50 rounded-full mb-5 overflow-hidden border border-slate-100">
                    <div class="h-full bg-blue-500 w-full rounded-full"></div>
                </div>
                <button class="w-full py-2.5 bg-blue-500 hover:bg-blue-700 text-white rounded-xl font-black text-[9px] uppercase tracking-widest transition-all shadow-md shadow-blue-100">Analisis</button>
            </div>
        </div>

        <div class="group bg-white rounded-[25px] shadow-sm border border-slate-100 overflow-hidden hover:shadow-xl transition-all duration-300">
            <div class="bg-amber-400 p-3 text-center">
                <h4 class="text-white font-black text-sm italic uppercase tracking-widest">X MIPA 3</h4>
            </div>
            <div class="p-5">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-[9px] font-black text-slate-400 uppercase">Siswa: 30</span>
                    <span class="text-[9px] font-black text-amber-500 bg-amber-50 px-2 py-0.5 rounded-md italic">0% Data</span>
                </div>
                <div class="w-full h-1.5 bg-slate-50 rounded-full mb-5 overflow-hidden border border-slate-100">
                    <div class="h-full bg-amber-400 w-0 group-hover:w-[15%] transition-all duration-700"></div>
                </div>
                <button class="w-full py-2.5 bg-amber-400 hover:bg-amber-500 text-white rounded-xl font-black text-[9px] uppercase tracking-widest transition-all shadow-md shadow-amber-100">Analisis</button>
            </div>
        </div>

        <div class="border-2 border-dashed border-slate-200 rounded-[25px] flex flex-col items-center justify-center p-5 text-slate-300 hover:border-blue-400 hover:text-blue-400 transition-all cursor-pointer group">
            <i class="fas fa-plus text-sm mb-2 group-hover:scale-125 transition-transform"></i>
            <span class="text-[8px] font-black uppercase tracking-tighter text-center">Tambah Analisis</span>
        </div>

    </div>

    <div class="mt-8 bg-blue-50/50 p-4 rounded-2xl border border-blue-100 flex items-center gap-4">
        <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white shadow-lg">
            <i class="fas fa-info-circle text-xs"></i>
        </div>
        <p class="text-[9px] text-blue-900 font-bold leading-tight">
            Pastikan data nilai sudah terisi minimal 90% sebelum melakukan analisis otomatis.
        </p>
    </div>

</main>

</body>
</html>
