<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai Raport - E-Raport Guru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 font-sans">

<div class="flex h-screen overflow-hidden">
    <aside class="w-72 bg-[#0a113d] text-white flex flex-col shrink-0">
        <div class="p-8 text-2xl font-bold border-b border-blue-900/50 tracking-tight">
            E-Raport Guru
        </div>

            <nav class="mt-8 px-4 space-y-3 flex-1">
                <a href="/dashboard" class="flex items-center px-5 py-3.5 rounded-2xl transition-all group {{ request()->is('dashboard') ? 'bg-blue-600 text-white shadow-lg shadow-blue-900/40' : 'text-blue-300 hover:bg-blue-800/40 hover:text-white' }}">
                    <i class="fas fa-layer-group mr-4 text-lg"></i>
                    <span class="text-sm {{ request()->is('dashboard') ? 'font-bold' : 'font-medium' }}">Dashboard</span>
                </a>
                <a href="/data_siswa" class="flex items-center px-5 py-3.5 rounded-2xl transition-all group {{ request()->is('data_siswa') ? 'bg-blue-600 text-white shadow-lg shadow-blue-900/40' : 'text-blue-300 hover:bg-blue-800/40 hover:text-white' }}">
                    <i class="fas fa-user-graduate mr-4 text-lg"></i>
                    <span class="text-sm {{ request()->is('data_siswa') ? 'font-bold' : 'font-medium' }} uppercase">Data Siswa</span>
                </a>
                <a href="/input_nilai" class="flex items-center px-5 py-3.5 rounded-2xl transition-all group {{ request()->is('input_nilai') ? 'bg-blue-600 text-white shadow-lg' : 'text-blue-300 hover:bg-blue-800/40' }}">
                    <i class="fas fa-file-signature mr-4 text-lg"></i>
                    <span class="text-sm {{ request()->is('input_nilai') ? 'font-bold' : 'font-medium' }} uppercase tracking-tight">Input Nilai Raport</span>
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

            <main class="flex-1 overflow-y-auto p-8">

            <div class="flex justify-between items-center mb-8">
                <h2 class="text-[22px] font-black text-slate-800 uppercase tracking-tighter">
                    Manajemen Nilai Raport
                </h2>
                <div class="flex items-center gap-3 bg-white px-4 py-2 rounded-2xl shadow-sm border border-gray-100">
                    <div class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center text-white text-[10px] font-black">RS</div>
                    <div class="text-right">
                        <p class="text-[10px] font-black text-slate-800 leading-none">Risa Setyawan, S.Pd.</p>
                        <p class="text-[9px] font-bold text-blue-500 uppercase">Wali Kelas X MIPA 1</p>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-blue-700 to-blue-500 rounded-[32px] p-8 mb-8 text-white shadow-xl shadow-blue-100 relative overflow-hidden">
                <div class="relative z-10 flex justify-between items-end">
                    <div>
                        <h3 class="text-xl font-black mb-2 uppercase tracking-tight">Pusat Input Nilai Siswa</h3>
                        <p class="text-blue-100 text-xs font-medium mb-6 opacity-80">Segera lengkapi nilai raport semester ganjil sebelum batas waktu penginputan berakhir.</p>
                        <div class="flex gap-2">
                            <span class="px-3 py-1.5 bg-white/10 rounded-lg text-[10px] font-bold border border-white/20 uppercase">T.A 2025/2026</span>
                            <span class="px-3 py-1.5 bg-red-500 rounded-lg text-[10px] font-bold shadow-lg shadow-red-900/20">DEADLINE: 24 DES 2025</span>
                        </div>
                    </div>
                    <button class="px-5 py-2.5 bg-white/20 hover:bg-white/30 backdrop-blur-md border border-white/30 rounded-xl font-bold text-[10px] transition-all uppercase tracking-widest font-inter">
                        Unduh Template
                    </button>
                </div>
            </div>

            <div class="mb-6">
                <h4 class="text-sm font-black text-slate-800 uppercase tracking-tight">Mata Pelajaran Ampuan</h4>
                <p class="text-[10px] text-slate-400 font-medium">Klik pada kartu mata pelajaran untuk mulai mengelola nilai.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

    <div class="group relative bg-white rounded-[35px] shadow-sm hover:shadow-2xl hover:shadow-emerald-100 transition-all duration-500 hover:-translate-y-3 border border-slate-100 overflow-hidden">
        <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-50 rounded-full -mr-16 -mt-16 transition-transform group-hover:scale-150 duration-700"></div>

        <div class="p-8 relative z-10">
            <div class="flex justify-between items-start mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-400 rounded-3xl flex items-center justify-center text-white shadow-lg shadow-emerald-200">
                    <i class="fas fa-atom text-2xl animate-pulse"></i>
                </div>
                <span class="px-4 py-1.5 bg-emerald-50 text-emerald-600 rounded-xl text-[10px] font-black border border-emerald-100 uppercase tracking-widest">X MIPA 1</span>
            </div>

            <h4 class="text-2xl font-black text-slate-800 uppercase tracking-tighter mb-1">Fisika</h4>
            <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-8">Ilmu Alam & Logika</p>

            <div class="space-y-3 mb-10">
                <div class="flex justify-between items-end">
                    <div class="flex flex-col">
                        <span class="text-[10px] font-black text-slate-400 uppercase tracking-tight">Progres Input</span>
                        <span class="text-xs font-black text-emerald-500 uppercase">Belum Ada Data</span>
                    </div>
                    <span class="text-2xl font-black text-slate-200 uppercase tracking-tighter">0%</span>
                </div>
                <div class="w-full h-3 bg-slate-50 rounded-full border border-slate-100 p-0.5 overflow-hidden">
                    <div class="w-0 h-full bg-gradient-to-r from-emerald-400 to-teal-400 rounded-full transition-all duration-1000 group-hover:w-[10%]"></div>
                </div>
            </div>

            <button class="w-full py-4 bg-emerald-500 hover:bg-emerald-600 text-white rounded-[20px] font-black text-[11px] uppercase tracking-[0.2em] shadow-xl shadow-emerald-200 transition-all active:scale-95 flex items-center justify-center gap-3">
                Mulai Input Baru <i class="fas fa-arrow-right text-[10px]"></i>
            </button>
        </div>
    </div>

    <div class="group relative bg-white rounded-[35px] shadow-sm hover:shadow-2xl hover:shadow-amber-100 transition-all duration-500 hover:-translate-y-3 border border-slate-100 overflow-hidden">
        <div class="absolute top-0 right-0 w-32 h-32 bg-amber-50 rounded-full -mr-16 -mt-16 transition-transform group-hover:scale-150 duration-700"></div>

        <div class="p-8 relative z-10">
            <div class="flex justify-between items-start mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-400 rounded-3xl flex items-center justify-center text-white shadow-lg shadow-amber-200">
                    <i class="fas fa-flask text-2xl animate-bounce"></i>
                </div>
                <span class="px-4 py-1.5 bg-amber-50 text-amber-600 rounded-xl text-[10px] font-black border border-amber-100 uppercase tracking-widest">X MIPA 2</span>
            </div>

            <h4 class="text-2xl font-black text-slate-800 uppercase tracking-tighter mb-1">Kimia</h4>
            <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-8">Struktur & Reaksi</p>

            <div class="space-y-3 mb-10">
                <div class="flex justify-between items-end">
                    <div class="flex flex-col">
                        <span class="text-[10px] font-black text-slate-400 uppercase tracking-tight">Progres Input</span>
                        <span class="text-xs font-black text-amber-500 uppercase">Belum Ada Data</span>
                    </div>
                    <span class="text-2xl font-black text-slate-200 uppercase tracking-tighter">0%</span>
                </div>
                <div class="w-full h-3 bg-slate-50 rounded-full border border-slate-100 p-0.5 overflow-hidden">
                    <div class="w-0 h-full bg-gradient-to-r from-amber-400 to-orange-400 rounded-full transition-all duration-1000 group-hover:w-[15%]"></div>
                </div>
            </div>

            <button class="w-full py-4 bg-amber-500 hover:bg-amber-600 text-white rounded-[20px] font-black text-[11px] uppercase tracking-[0.2em] shadow-xl shadow-amber-200 transition-all active:scale-95 flex items-center justify-center gap-3">
                Lengkapi Nilai <i class="fas fa-vial text-[10px]"></i>
            </button>
        </div>
    </div>

    <div class="group relative bg-white rounded-[35px] shadow-sm hover:shadow-2xl hover:shadow-blue-100 transition-all duration-500 hover:-translate-y-3 border border-slate-100 overflow-hidden">
        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-full -mr-16 -mt-16 transition-transform group-hover:scale-150 duration-700"></div>

        <div class="p-8 relative z-10">
            <div class="flex justify-between items-start mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-indigo-500 rounded-3xl flex items-center justify-center text-white shadow-lg shadow-blue-200">
                    <i class="fas fa-dna text-2xl rotate-45"></i>
                </div>
                <span class="px-4 py-1.5 bg-blue-50 text-blue-600 rounded-xl text-[10px] font-black border border-blue-100 uppercase tracking-widest">X MIPA 3</span>
            </div>

            <h4 class="text-2xl font-black text-slate-800 uppercase tracking-tighter mb-1">Biologi</h4>
            <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-8">Makhluk Hidup & Genetika</p>

            <div class="space-y-3 mb-10">
                <div class="flex justify-between items-end">
                    <div class="flex flex-col">
                        <span class="text-[10px] font-black text-slate-400 uppercase tracking-tight">Progres Input</span>
                        <span class="text-xs font-black text-blue-600 uppercase">Belum Ada Data</span>
                    </div>
                    <span class="text-2xl font-black text-slate-200 uppercase tracking-tighter">0%</span>
                </div>
                <div class="w-full h-3 bg-slate-50 rounded-full border border-slate-100 p-0.5 overflow-hidden">
                    <div class="w-0 h-full bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full transition-all duration-1000 group-hover:w-[12%]"></div>
                </div>
            </div>

            <button class="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-[20px] font-black text-[11px] uppercase tracking-[0.2em] shadow-xl shadow-blue-200 transition-all active:scale-95 flex items-center justify-center gap-3">
                Lengkapi Nilai <i class="fas fa-microscope text-[10px]"></i>
            </button>
        </div>
    </div>
</div>

        </main>
    </div>

</body>
</html>
