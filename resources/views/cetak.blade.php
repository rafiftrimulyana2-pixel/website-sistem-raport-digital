<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak & Export - E-Raport</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap');
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
            <a href="/dashboard" class="flex items-center px-5 py-3.5 rounded-2xl transition-all group {{ request()->is('dashboard') ? 'bg-blue-600 text-white shadow-lg' : 'text-blue-300 hover:bg-blue-800/40' }}">
                <i class="fas fa-layer-group mr-4 text-lg group-hover:scale-110"></i>
                <span class="font-bold {{ request()->is('dashboard') ? 'font-bold' : 'font-medium' }}">Dashboard</span>
            </a>
            <a href="/data_siswa" class="flex items-center px-5 py-3.5 text-blue-300 hover:bg-blue-800/40 hover:text-white rounded-2xl transition-all group">
                <i class="fas fa-user-graduate mr-4 text-lg group-hover:scale-110"></i>
                <span class="text-sm font-medium">Data Siswa</span>
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

    <main class="flex-1 overflow-y-auto p-6 bg-slate-100/80">

    <div class="flex justify-between items-center mb-6 bg-white p-5 rounded-[22px] border border-white shadow-xl shadow-slate-200/50">
        <div>
            <div class="flex items-center gap-2 mb-1">
                <span class="px-2 py-0.5 bg-indigo-600 text-[8px] font-black text-white rounded-md uppercase tracking-widest">System</span>
                <h1 class="text-lg font-[1000] text-slate-900 tracking-tighter">Pusat Dokumen</h1>
            </div>
            <p class="text-[10px] text-slate-400 font-bold uppercase tracking-tighter italic">Laporan Akademik Terpadu</p>
        </div>

        <div class="flex items-center gap-3 bg-slate-50 p-1.5 pr-4 rounded-xl border border-slate-200">
            <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center text-white text-[10px] font-black shadow-lg shadow-indigo-200">RS</div>
            <p class="text-[10px] font-black text-slate-700 uppercase italic">Risa Setyawan</p>
        </div>
    </div>

    <div class="bg-indigo-50/50 p-4 rounded-[25px] border border-indigo-100 shadow-md mb-8">
        <div class="grid grid-cols-2 md:grid-cols-5 gap-3">
            <div class="space-y-1">
                <p class="text-[8px] font-black text-indigo-400 uppercase ml-2">Filter Kelas</p>
                <select class="w-full bg-white border border-indigo-100 rounded-xl px-3 py-2 text-[10px] font-bold text-slate-600 outline-none focus:ring-2 focus:ring-indigo-500/20 transition-all shadow-sm">
                    <option>Semua Kelas</option>
                </select>
            </div>
            <div class="space-y-1">
                <p class="text-[8px] font-black text-indigo-400 uppercase ml-2">Semester</p>
                <select class="w-full bg-white border border-indigo-100 rounded-xl px-3 py-2 text-[10px] font-bold text-slate-600 outline-none shadow-sm">
                    <option>Ganjil 25/26</option>
                </select>
            </div>
            <div class="space-y-1">
                <p class="text-[8px] font-black text-indigo-400 uppercase ml-2">Dokumen</p>
                <select class="w-full bg-white border border-indigo-100 rounded-xl px-3 py-2 text-[10px] font-bold text-slate-600 outline-none shadow-sm">
                    <option>Semua File</option>
                </select>
            </div>
            <div class="space-y-1">
                <p class="text-[8px] font-black text-indigo-400 uppercase ml-2">Status</p>
                <select class="w-full bg-white border border-indigo-100 rounded-xl px-3 py-2 text-[10px] font-bold text-slate-600 outline-none shadow-sm">
                    <option>Tampilkan Semua</option>
                </select>
            </div>
            <button class="bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl py-2 mt-4 font-black text-[9px] uppercase tracking-widest transition-all shadow-lg shadow-indigo-200 active:scale-90 active:bg-indigo-900 active:shadow-none">
                Cari Data
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">

        <div class="group bg-white rounded-[32px] p-7 border-2 border-indigo-50 shadow-[0_15px_40px_-15px_rgba(0,0,0,0.1)] hover:border-indigo-400 transition-all duration-300">
            <div class="w-12 h-12 bg-indigo-600 text-white rounded-2xl flex items-center justify-center mb-5 shadow-lg shadow-indigo-200 group-hover:scale-110 group-hover:rotate-3 transition-all">
                <i class="fas fa-file-invoice text-lg"></i>
            </div>
            <h4 class="text-base font-black text-slate-800 mb-1">Cetak Raport</h4>
            <p class="text-[10px] text-slate-400 font-bold mb-6 leading-tight uppercase tracking-tighter">Laporan Akademik PDF</p>
            <div class="flex gap-2">
                <button class="flex-1 py-3 bg-slate-900 text-white rounded-xl text-[8px] font-black uppercase tracking-widest transition-all hover:bg-indigo-600 active:scale-90">Raport UTS</button>
                <button class="flex-1 py-3 bg-indigo-50 text-indigo-600 rounded-xl text-[8px] font-black uppercase tracking-widest transition-all hover:bg-indigo-100 active:scale-90 border border-indigo-100">Raport UAS</button>
            </div>
        </div>

        <div class="group bg-white rounded-[32px] p-7 border-2 border-amber-50 shadow-[0_15px_40px_-15px_rgba(0,0,0,0.1)] hover:border-amber-400 transition-all duration-300">
            <div class="w-12 h-12 bg-amber-400 text-white rounded-2xl flex items-center justify-center mb-5 shadow-lg shadow-amber-100 group-hover:scale-110 group-hover:-rotate-3 transition-all">
                <i class="fas fa-lightbulb text-lg"></i>
            </div>
            <h4 class="text-base font-black text-slate-800 mb-1">Rekomendasi</h4>
            <p class="text-[10px] text-slate-400 font-bold mb-6 leading-tight uppercase tracking-tighter">Analisis Minat Bakat</p>
            <button class="w-full py-3.5 bg-amber-400 text-white rounded-xl text-[9px] font-black uppercase tracking-[0.2em] transition-all shadow-lg shadow-amber-200 hover:bg-amber-500 active:scale-90 active:shadow-none">Cetak Dokumen</button>
        </div>

        <div class="group bg-white rounded-[32px] p-7 border-2 border-emerald-50 shadow-[0_15px_40px_-15px_rgba(0,0,0,0.1)] hover:border-emerald-400 transition-all duration-300">
            <div class="w-12 h-12 bg-emerald-500 text-white rounded-2xl flex items-center justify-center mb-5 shadow-lg shadow-emerald-100 group-hover:scale-110 transition-all">
                <i class="fas fa-file-excel text-lg"></i>
            </div>
            <h4 class="text-base font-black text-slate-800 mb-1">Data Master</h4>
            <p class="text-[10px] text-slate-400 font-bold mb-6 leading-tight uppercase tracking-tighter">Export XLS & PDF</p>
            <div class="flex gap-2">
                <button class="flex-1 py-3 bg-emerald-500 text-white rounded-xl text-[8px] font-black uppercase tracking-widest transition-all hover:bg-emerald-600 active:scale-90 shadow-md shadow-emerald-100">Excel</button>
                <button class="flex-1 py-3 bg-rose-500 text-white rounded-xl text-[8px] font-black uppercase tracking-widest transition-all hover:bg-rose-600 active:scale-90 shadow-md shadow-rose-100">PDF</button>
            </div>
        </div>

    </div>

    <div class="bg-white rounded-[30px] border-2 border-slate-50 shadow-2xl shadow-slate-200 overflow-hidden">
        <div class="px-7 py-4 bg-slate-900 flex justify-between items-center">
            <h3 class="text-[9px] font-black text-white uppercase tracking-[0.3em]">Log Aktivitas Cetak</h3>
            <span class="text-[8px] font-bold text-slate-400 uppercase">Total: 12 Laporan</span>
        </div>
        <div class="p-2">
            <table class="w-full">
                <thead class="bg-slate-50">
                    <tr>
                        <th class="px-6 py-4 text-[9px] font-black text-slate-400 uppercase text-left">Timeline</th>
                        <th class="px-6 py-4 text-[9px] font-black text-slate-400 uppercase text-left">Nama File</th>
                        <th class="px-6 py-4 text-[9px] font-black text-slate-400 uppercase text-center">Status</th>
                        <th class="px-6 py-4 text-[9px] font-black text-slate-400 uppercase text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr class="group hover:bg-indigo-50/50 transition-all">
                        <td class="px-6 py-4 text-[10px] font-bold text-slate-400 italic">21 Jan, 13:00</td>
                        <td class="px-6 py-4 text-[10px] font-black text-slate-700 uppercase">Raport_X-MIPA-1.pdf</td>
                        <td class="px-6 py-4 text-center">
                            <span class="bg-emerald-100 text-emerald-600 text-[8px] font-black px-3 py-1 rounded-lg border border-emerald-200">SUCCESS</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="px-4 py-2 bg-indigo-600 text-white text-[8px] font-black rounded-lg hover:bg-slate-900 transition-all active:scale-75 shadow-md shadow-indigo-100">DOWNLOAD</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

</body>
</html>
