<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Raport Guru - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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

    <main class="flex-1 overflow-y-auto flex flex-col">
        <header class="bg-white p-6 flex justify-between items-center px-10 border-b border-gray-100 sticky top-0 z-20">
            <h1 class="text-2xl font-bold text-blue-900">Ringkasan Aktivitas</h1>
            <div class="flex items-center space-x-6">
                <div class="text-right">
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-none">Semester Ganjil</p>
                    <p class="text-sm font-semibold text-gray-600">2025/2026</p>
                </div>
                <div class="w-12 h-12 bg-gradient-to-tr from-blue-600 to-indigo-500 rounded-2xl flex items-center justify-center text-white font-bold shadow-md ring-4 ring-blue-50">RS</div>
            </div>
        </header>

        <div class="p-10 space-y-10">
            <div class="relative bg-gradient-to-r from-blue-700 via-blue-600 to-indigo-600 p-6 rounded-2xl text-white shadow-lg overflow-hidden">
    <div class="relative z-10 flex justify-between items-center">
        <div>
            <h2 class="text-xl font-bold mb-1">Selamat Pagi, Bu Risa! 👋</h2>
            <p class="text-[11px] opacity-90 leading-relaxed">Status Semester Ganjil 2025/2026 : Input nilai mencapai <span class="font-bold border-b border-white/40">84%</span> dari 97 siswa.</p>
        </div>

        <button class="bg-white text-blue-600 px-5 py-2 rounded-xl text-xs font-bold hover:bg-blue-50 transition-all shadow-md active:scale-95 whitespace-nowrap">
            Input Nilai Baru
        </button>
    </div>
    <div class="absolute top-0 right-0 -mr-10 -mt-10 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

    <div class="bg-emerald-50/50 p-4 rounded-2xl border-l-4 border-emerald-500 shadow-sm flex items-center space-x-4 hover:bg-emerald-50 transition-all">
        <div class="w-10 h-10 bg-emerald-500 rounded-xl flex items-center justify-center text-white shadow-md">
            <i class="fas fa-users text-lg"></i>
        </div>
        <div>
            <p class="text-[9px] font-bold text-emerald-700 uppercase tracking-tight">Total Siswa Aktif</p>
            <div class="flex items-baseline space-x-2">
                <h4 class="text-2xl font-bold text-emerald-500 leading-none">97</h4>
                <span class="text-[8px] font-bold text-emerald-600 bg-emerald-50 px-1.5 py-0.5 rounded-full">• 3 Kelas Terdaftar</span>
            </div>
        </div>
    </div>

    <div class="bg-blue-50/50 p-4 rounded-2xl border-l-4 border-blue-500 shadow-sm flex items-center space-x-4 hover:bg-blue-50 transition-all">
        <div class="w-10 h-10 bg-blue-500 rounded-xl flex items-center justify-center text-white shadow-md">
            <i class="fas fa-tasks text-lg"></i>
        </div>
        <div>
            <p class="text-[9px] font-bold text-blue-700 uppercase tracking-tight">Kelengkapan Nilai</p>
            <div class="flex justify-between items-baseline">
                <h4 class="text-2xl font-bold text-blue-600 leading-none">83%</h4>
                <span class="text-[8px] text-blue-400 font-bold ml-2">Progress</span>
            </div>
        </div>
    </div>

    <div class="bg-amber-50/50 p-4 rounded-2xl border-l-4 border-amber-500 shadow-sm flex items-center space-x-4 hover:bg-amber-50 transition-all">
        <div class="w-10 h-10 bg-amber-500 rounded-xl flex items-center justify-center text-white shadow-md">
            <i class="fas fa-file-signature text-lg"></i>
        </div>
        <div>
            <p class="text-[9px] font-bold text-amber-700 uppercase tracking-tight">Tuntas Input</p>
            <div class="flex items-baseline space-x-2">
                <h4 class="text-2xl font-bold text-amber-500 leading-none">83</h4>
                <span class="text-[8px] text-amber-400 font-bold">12 Perlu Koreksi</span>
            </div>
        </div>
    </div>

    <div class="bg-red-50 p-4 rounded-2xl border-l-4 border-red-500 shadow-sm flex flex-col justify-center relative overflow-hidden">
        <div class="flex items-center text-red-500 mb-1">
            <i class="fas fa-bell text-[10px] mr-1.5 animate-bounce"></i>
            <p class="text-[9px] font-bold uppercase tracking-tighter">Peringatan Batas Akhir</p>
        </div>
        <p class="text-[9px] text-red-800 font-medium italic mb-1 leading-tight">Semua input nilai harus selesai :</p>
        <h4 class="text-lg font-bold text-red-600 leading-none">31 Desember 2025</h4>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-stretch">

    <div class="lg:col-span-2 bg-white p-6 rounded-[2rem] border border-gray-100 shadow-sm flex flex-col h-full">
        <div class="mb-4">
            <h3 class="text-sm font-bold text-gray-800">Progres Rata-Rata Nilai Kelas</h3>
            <p class="text-[10px] text-gray-400 mt-0.5">Statistik input nilai per jenjang kelas.</p>
        </div>

        <div class="flex-1 flex items-end justify-around px-8 pb-4 pt-10 border-b border-gray-50 h-48 max-w-2xl mx-auto w-full">

            <div class="flex flex-col items-center w-12 group relative">
                <div class="w-full bg-blue-50 rounded-xl relative h-32 overflow-hidden shadow-inner">
                    <div class="absolute bottom-0 w-full bg-gradient-to-t from-blue-600 to-blue-400 rounded-xl flex items-center justify-center transition-all duration-700" style="height: 85%;">
                        <span class="text-[8px] text-white font-bold opacity-0 group-hover:opacity-100">85%</span>
                    </div>
                </div>
                <span class="text-[9px] font-bold text-gray-400 mt-3 uppercase tracking-tighter">3 MIPA</span>
            </div>

            <div class="flex flex-col items-center w-12 group relative">
                <div class="w-full bg-amber-50 rounded-xl relative h-32 overflow-hidden shadow-inner">
                    <div class="absolute bottom-0 w-full bg-gradient-to-t from-amber-500 to-amber-300 rounded-xl flex items-center justify-center transition-all duration-700" style="height: 50%;">
                        <span class="text-[8px] text-white font-bold opacity-0 group-hover:opacity-100">50%</span>
                    </div>
                </div>
                <span class="text-[9px] font-bold text-gray-400 mt-3 uppercase tracking-tighter">2 MIPA</span>
            </div>

            <div class="flex flex-col items-center w-12 group relative">
                <div class="w-full bg-emerald-50 rounded-xl relative h-32 overflow-hidden shadow-inner">
                    <div class="absolute bottom-0 w-full bg-gradient-to-t from-emerald-600 to-emerald-400 rounded-xl flex items-center justify-center transition-all duration-700" style="height: 100%;">
                        <span class="text-[8px] text-white font-bold opacity-0 group-hover:opacity-100">100%</span>
                    </div>
                </div>
                <span class="text-[9px] font-bold text-gray-400 mt-3 uppercase tracking-tighter">1 MIPA</span>
            </div>

            <div class="flex flex-col items-center w-12 group relative">
                <div class="w-full bg-blue-50/50 rounded-xl relative h-32 overflow-hidden shadow-inner">
                    <div class="absolute bottom-0 w-full bg-gradient-to-t from-blue-400 to-blue-300 rounded-xl flex items-center justify-center transition-all duration-700" style="height: 70%;">
                        <span class="text-[8px] text-white font-bold opacity-0 group-hover:opacity-100">70%</span>
                    </div>
                </div>
                <span class="text-[9px] font-bold text-gray-400 mt-3 uppercase tracking-tighter">MAT.WJB</span>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-[2rem] border border-gray-100 shadow-sm flex flex-col">
        <div class="mb-5">
            <h3 class="text-sm font-bold text-gray-800">Agenda Mendatang</h3>
            <p class="text-[10px] text-gray-400 mt-0.5">Jadwal penting Desember 2025.</p>
        </div>

        <div class="space-y-3 flex-1">
            <div class="p-3 bg-white rounded-xl border border-gray-100 border-l-4 border-l-blue-500 shadow-sm">
                <div class="flex justify-between items-start">
                    <p class="text-[10px] font-bold text-gray-800 leading-tight">Rapat Pleno Kenaikan Kelas</p>
                    <span class="bg-blue-50 text-blue-600 text-[7px] px-1.5 py-0.5 rounded-full font-black uppercase">Utama</span>
                </div>
                <p class="text-[8px] text-gray-400 mt-1 flex items-center">
                    <i class="far fa-clock mr-1"></i> 22 Des | 09:00 WIB
                </p>
            </div>

            <div class="p-3 bg-white rounded-xl border border-gray-100 border-l-4 border-l-emerald-500 shadow-sm">
                <div class="flex justify-between items-start">
                    <p class="text-[10px] font-bold text-gray-800 leading-tight">Input Nilai: X MIPA 1</p>
                </div>
                <p class="text-[8px] text-gray-400 mt-1 flex items-center">
                    <i class="far fa-calendar-alt mr-1"></i> Besok | 07:30 WIB
                </p>
            </div>
        </div>

        <button class="w-full mt-4 py-2 bg-gray-50 text-gray-500 rounded-xl text-[9px] font-bold hover:bg-blue-600 hover:text-white transition-all border border-gray-100">
            Lihat Semua Jadwal
        </button>
    </div>
</div>

<div class="bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-xl shadow-gray-200/40 mt-10">
    <div class="flex justify-between items-center mb-10 px-2">
        <div>
            <h3 class="text-xl font-bold text-gray-900 tracking-tight">Status Ringkasan Kelas Anda</h3>
            <p class="text-[11px] text-gray-400 mt-1 font-medium">Laporan progres pengisian nilai semester ganjil.</p>
        </div>
        <button class="text-[10px] font-bold text-blue-600 bg-blue-50/50 px-5 py-2.5 rounded-2xl hover:bg-blue-600 hover:text-white transition-all shadow-sm uppercase tracking-widest">
            Kelola Semua
        </button>
    </div>

    <div class="overflow-hidden border border-gray-100 rounded-[2rem] bg-white shadow-sm">
        <table class="w-full text-left border-collapse table-fixed">
            <thead>
                <tr class="bg-slate-50/80 text-[10px] font-black text-slate-500 uppercase tracking-widest">
                    <th class="px-6 py-5 border-r border-gray-100/80 w-[25%]">Identitas Kelas</th>
                    <th class="px-6 py-5 border-r border-gray-100/80 w-[20%]">Mata Pelajaran</th>
                    <th class="px-6 py-5 border-r border-gray-100/80 w-[20%] text-center">Status</th>
                    <th class="px-6 py-5 border-r border-gray-100/80 w-[20%] text-center">Progres</th>
                    <th class="px-6 py-5 w-[15%] text-center">Aksi Cepat</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <tr class="hover:bg-slate-50/30 transition-all">
                    <td class="px-6 py-6 border-r border-gray-100/80">
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 bg-emerald-500 rounded-2xl flex items-center justify-center text-white shadow-lg shadow-emerald-100">
                                <i class="fas fa-chalkboard-teacher text-xs"></i>
                            </div>
                            <span class="text-sm font-bold text-gray-800">X MIPA 1</span>
                        </div>
                    </td>
                    <td class="px-6 py-6 border-r border-gray-100/80">
                        <span class="text-[11px] font-bold text-gray-700 uppercase">Fisika</span>
                    </td>
                    <td class="px-6 py-6 border-r border-gray-100/80 text-center">
                        <div class="inline-flex items-center px-4 py-1.5 bg-emerald-50 border border-emerald-100 rounded-full shadow-sm">
                            <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full mr-2 shadow-[0_0_8px_rgba(16,185,129,0.5)]"></span>
                            <span class="text-[9px] font-black text-emerald-700 uppercase">Tuntas 100%</span>
                        </div>
                    </td>
                    <td class="px-6 py-6 border-r border-gray-100/80 text-center">
                        <div class="flex justify-center px-2">
                            <div class="w-full h-2.5 bg-gray-100 rounded-full overflow-hidden shadow-inner border border-gray-200/50">
                                <div class="h-full bg-emerald-500 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-6 text-center">
                        <div class="flex justify-center items-center space-x-3">
                            <button class="w-9 h-9 flex items-center justify-center bg-white border border-gray-200 text-emerald-500 rounded-xl shadow-sm hover:bg-emerald-500 hover:text-white transition-all">
                                <i class="fas fa-file-invoice text-[12px] leading-none"></i>
                            </button>
                            <button class="w-9 h-9 flex items-center justify-center bg-white border border-gray-200 text-emerald-500 rounded-xl shadow-sm hover:bg-emerald-500 hover:text-white transition-all">
                                <i class="fas fa-eye text-[12px] leading-none"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <tr class="hover:bg-slate-50/30 transition-all">
                    <td class="px-6 py-6 border-r border-gray-100/80">
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 bg-blue-500 rounded-2xl flex items-center justify-center text-white shadow-lg shadow-blue-100">
                                <i class="fas fa-chalkboard-teacher text-xs"></i>
                            </div>
                            <span class="text-sm font-bold text-gray-800">XI MIPA 3</span>
                        </div>
                    </td>
                    <td class="px-6 py-6 border-r border-gray-100/80">
                        <span class="text-[11px] font-bold text-gray-700 uppercase">Matematika</span>
                    </td>
                    <td class="px-6 py-6 border-r border-gray-100/80 text-center">
                        <div class="inline-flex items-center px-4 py-1.5 bg-blue-50 border border-blue-100 rounded-full shadow-sm">
                            <span class="w-1.5 h-1.5 bg-blue-500 rounded-full mr-2 animate-pulse shadow-[0_0_8px_rgba(59,130,246,0.5)]"></span>
                            <span class="text-[9px] font-black text-blue-700 uppercase">Input 75%</span>
                        </div>
                    </td>
                    <td class="px-6 py-6 border-r border-gray-100/80 text-center">
                        <div class="flex justify-center px-2">
                            <div class="w-full h-2.5 bg-gray-100 rounded-full overflow-hidden shadow-inner border border-gray-200/50">
                                <div class="h-full bg-blue-500 rounded-full shadow-sm" style="width: 75%"></div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-6 text-center">
                        <div class="flex justify-center items-center space-x-3">
                            <button class="w-9 h-9 flex items-center justify-center bg-white border border-gray-200 text-blue-600 rounded-xl shadow-sm hover:bg-blue-600 hover:text-white transition-all">
                                <i class="fas fa-pen-nib text-[12px] leading-none"></i>
                            </button>
                            <button class="w-9 h-9 flex items-center justify-center bg-white border border-gray-200 text-blue-600 rounded-xl shadow-sm hover:bg-blue-600 hover:text-white transition-all">
                                <i class="fas fa-search-plus text-[12px] leading-none"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
        </div>
    </main>
</div>

</body>
</html>
