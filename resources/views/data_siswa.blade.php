<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa - Compact Version</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f1f5f9; }
        .card-class { transition: all 0.2s ease-in-out; border-radius: 24px; }
        .card-class:hover { transform: translateY(-5px); box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1); }
        .custom-scroll::-webkit-scrollbar { width: 5px; }
        .custom-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    </style>
</head>
<body class="bg-gray-50 font-sans">

<div class="flex h-screen overflow-hidden">
    <aside class="w-72 bg-[#0a113d] text-white flex flex-col shrink-0">
        <div class="p-8 text-2xl font-bold border-b border-blue-900/50 tracking-tight">
            E-Raport Guru
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
    <main class="flex-1 flex flex-col overflow-hidden">
        <header class="px-6 py-4">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 flex justify-between items-center px-8 py-4">
                <h2 class="text-md font-bold text-black tracking-tight uppercase">Manajemen Data Siswa</h2>
                <div class="flex items-center space-x-4">
                    <div class="text-right border-r pr-4 border-gray-100">
                        <p class="text-[11px] font-900 text-black uppercase">Risa Setyawan, S.Pd.</p>
                        <p class="text-[9px] font-700 text-blue-500 uppercase tracking-widest">Wali Kelas X MIPA 1</p>
                    </div>
                    <div class="w-9 h-9 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-[10px] shadow-md">RS</div>
                </div>
            </div>
        </header>

        <div class="flex-1 px-6 pb-6 overflow-y-auto custom-scroll">
            <div class="bg-white rounded-2xl p-6 mb-6 shadow-sm border border-gray-100 flex items-center gap-4">
                <div class="relative flex-1">
                    <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-300 text-xs"></i>
                    <input type="text" placeholder="Cari NISN atau Nama Siswa..."
                        class="w-full pl-11 pr-4 py-2.5 bg-gray-50 border-none rounded-xl focus:ring-2 focus:ring-blue-600 font-600 text-[12px]">
                </div>
                <div class="flex gap-2">
                    <div class="bg-blue-50 px-4 py-2 rounded-xl border border-blue-100 hidden md:block">
                        <p class="text-[11px] font-800 text-blue-700">T.A 2025/2026</p>
                    </div>
                    <button class="bg-[#0a0f2c] text-white px-5 py-2.5 rounded-xl font-800 text-[11px] hover:bg-blue-600 transition-all flex items-center gap-2">
                        <i class="fas fa-sliders-h text-[10px]"></i> Filter
                    </button>
                </div>
            </div>

            <div class="mt-10">
    <div class="flex items-center justify-between mb-8 px-2">
        <h3 class="text-xl font-black text-slate-800 uppercase tracking-tighter">Pilih Kelas Ampuan</h3>
        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest bg-slate-100 px-3 py-1 rounded-full">Total: 3 Kelas</span>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

    <div class="group relative bg-white rounded-[35px] shadow-sm hover:shadow-2xl hover:shadow-emerald-100 transition-all duration-500 hover:-translate-y-3 border-2 border-emerald-400/20 overflow-hidden">
        <div class="absolute -top-10 -right-10 w-32 h-32 bg-emerald-50 rounded-full blur-3xl group-hover:bg-emerald-100 transition-colors"></div>

        <div class="p-8 relative z-10">
            <div class="flex justify-between items-start mb-10">
                <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-400 rounded-2xl flex items-center justify-center text-white shadow-lg shadow-emerald-200 group-hover:rotate-12 transition-transform">
                    <i class="fas fa-flask text-2xl"></i>
                </div>
                <span class="px-4 py-1.5 bg-slate-50 text-slate-400 rounded-xl text-[10px] font-black border border-slate-100 uppercase">30 Siswa</span>
            </div>

            <h4 class="text-2xl font-black text-slate-800 uppercase tracking-tighter mb-1">X MIPA 1</h4>
            <p class="text-[10px] font-bold text-emerald-500 uppercase tracking-widest mb-8">Wali: Risa Setyawan, S.Pd.</p>

            <div class="mb-8">
                <div class="flex justify-between text-[9px] font-black mb-2 uppercase text-slate-400">
                    <span>Status Keaktifan</span>
                    <span class="text-emerald-500">28 Aktif</span>
                </div>
                <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                    <div class="h-full bg-emerald-400 rounded-full transition-all duration-1000 group-hover:w-[93%]" style="width: 70%"></div>
                </div>
            </div>

            <button class="w-full py-4 bg-emerald-500 hover:bg-emerald-600 text-white rounded-2xl font-black text-[10px] uppercase tracking-widest shadow-lg shadow-emerald-200 transition-all active:scale-95">
                Lihat Data Siswa
            </button>
        </div>
    </div>

    <div class="group relative bg-white rounded-[35px] shadow-sm hover:shadow-2xl hover:shadow-amber-100 transition-all duration-500 hover:-translate-y-3 border-2 border-amber-400/20 overflow-hidden">
        <div class="absolute -top-10 -right-10 w-32 h-32 bg-amber-50 rounded-full blur-3xl group-hover:bg-amber-100 transition-colors"></div>

        <div class="p-8 relative z-10">
            <div class="flex justify-between items-start mb-10">
                <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-400 rounded-2xl flex items-center justify-center text-white shadow-lg shadow-amber-200 group-hover:rotate-12 transition-transform">
                    <i class="fas fa-microscope text-2xl"></i>
                </div>
                <span class="px-4 py-1.5 bg-slate-50 text-slate-400 rounded-xl text-[10px] font-black border border-slate-100 uppercase">30 Siswa</span>
            </div>

            <h4 class="text-2xl font-black text-slate-800 uppercase tracking-tighter mb-1">X MIPA 2</h4>
            <p class="text-[10px] font-bold text-amber-500 uppercase tracking-widest mb-8">Wali: Bambang S., S.Pd.</p>

            <div class="mb-8">
                <div class="flex justify-between text-[9px] font-black mb-2 uppercase text-slate-400">
                    <span>Status Keaktifan</span>
                    <span class="text-amber-500">15 Aktif</span>
                </div>
                <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                    <div class="h-full bg-amber-400 rounded-full transition-all duration-1000 group-hover:w-[50%]" style="width: 30%"></div>
                </div>
            </div>

            <button class="w-full py-4 bg-amber-500 hover:bg-amber-600 text-white rounded-2xl font-black text-[10px] uppercase tracking-widest shadow-lg shadow-amber-200 transition-all active:scale-95">
                Lihat Data Siswa
            </button>
        </div>
    </div>

    <div class="group relative bg-white rounded-[35px] shadow-sm hover:shadow-2xl hover:shadow-blue-100 transition-all duration-500 hover:-translate-y-3 border-2 border-blue-400/20 overflow-hidden">
        <div class="absolute -top-10 -right-10 w-32 h-32 bg-blue-50 rounded-full blur-3xl group-hover:bg-blue-100 transition-colors"></div>

        <div class="p-8 relative z-10">
            <div class="flex justify-between items-start mb-10">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-indigo-500 rounded-2xl flex items-center justify-center text-white shadow-lg shadow-blue-200 group-hover:rotate-12 transition-transform">
                    <i class="fas fa-dna text-2xl"></i>
                </div>
                <span class="px-4 py-1.5 bg-slate-50 text-slate-400 rounded-xl text-[10px] font-black border border-slate-100 uppercase">30 Siswa</span>
            </div>

            <h4 class="text-2xl font-black text-slate-800 uppercase tracking-tighter mb-1">X MIPA 3</h4>
            <p class="text-[10px] font-bold text-blue-500 uppercase tracking-widest mb-8">Wali: Siti Aminah, S.Pd.</p>

            <div class="mb-8">
                <div class="flex justify-between text-[9px] font-black mb-2 uppercase text-slate-400">
                    <span>Status Keaktifan</span>
                    <span class="text-blue-500">30 Aktif</span>
                </div>
                <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                    <div class="h-full bg-blue-500 rounded-full transition-all duration-1000 group-hover:w-[100%]" style="width: 85%"></div>
                </div>
            </div>

            <button class="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-2xl font-black text-[10px] uppercase tracking-widest shadow-lg shadow-blue-200 transition-all active:scale-95">
                Lihat Data Siswa
            </button>
        </div>
    </div>
</div>

</body>
</html>
