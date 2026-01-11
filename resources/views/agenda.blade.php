<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Raport Guru - Kalender Agenda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
                <a href="#" class="flex items-center px-5 py-3.5 bg-blue-600 text-white rounded-2xl shadow-lg shadow-blue-900/40 transition-all">
                    <i class="fas fa-layer-group mr-4 text-lg"></i>
                    <span class="font-semibold text-sm">Dashboard</span>
                </a>
                <a href="#" class="flex items-center px-5 py-3.5 text-blue-300 hover:bg-blue-800/40 hover:text-white rounded-2xl transition-all group">
                    <i class="fas fa-user-graduate mr-4 text-lg group-hover:scale-110"></i>
                    <span class="text-sm font-medium">Data Siswa</span>
                </a>
                <a href="#" class="flex items-center px-5 py-3.5 text-blue-300 hover:bg-blue-800/40 hover:text-white rounded-2xl transition-all group">
                    <i class="fas fa-file-signature mr-4 text-lg group-hover:scale-110"></i>
                    <span class="text-sm font-medium">Input Nilai Raport</span>
                </a>
                <a href="#" class="flex items-center px-5 py-3.5 text-blue-300 hover:bg-blue-800/40 hover:text-white rounded-2xl transition-all group">
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
            <header class="px-8 py-6">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 flex justify-between items-center px-8 py-3.5">
                    <div class="flex items-center space-x-2">
                        <div class="w-1.5 h-1.5 bg-blue-600 rounded-full"></div>
                        <h2 class="text-xs font-800 text-gray-500 uppercase tracking-widest">Kalender & Detail Agenda</h2>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="text-[10px] font-800 text-gray-700">Risa Setyawan</span>
                        <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-[10px]">RS</div>
                    </div>
                </div>
            </header>

            <div class="flex-1 px-8 pb-8 overflow-hidden">
                <div class="grid grid-cols-12 gap-6 h-full">

                    <div class="col-span-7 flex flex-col space-y-6 overflow-hidden">
                        <div class="bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-100 h-[60%] flex flex-col">
                            <div class="flex justify-between items-center mb-6">
                                <h3 class="text-sm font-800 text-gray-800">Januari 2026</h3>
                                <div class="flex space-x-2">
                                    <button class="w-8 h-8 rounded-lg bg-gray-50 text-gray-400 hover:text-blue-600 transition-colors"><i class="fas fa-chevron-left text-[10px]"></i></button>
                                    <button class="w-8 h-8 rounded-lg bg-gray-50 text-gray-400 hover:text-blue-600 transition-colors"><i class="fas fa-chevron-right text-[10px]"></i></button>
                                </div>
                            </div>

                            <div class="grid grid-cols-7 text-center mb-4">
                                <template x-for="d in ['Min','Sen','Sel','Rab','Kam','Jum','Sab']">
                                    <span class="text-[9px] font-800 text-gray-300 uppercase tracking-tighter" x-text="d"></span>
                                </template>
                            </div>

                            <div class="grid grid-cols-7 gap-y-2 calendar-grid text-center flex-1" x-data="{ days: Array.from({length: 31}, (_, i) => i + 1) }">
                                <div class="empty"></div><div class="empty"></div><div class="empty"></div>
                                <template x-for="day in days">
                                    <div :class="{
                                        'date-sunday': ([4, 11, 18, 25].includes(day) || day === 1),
                                        'date-active': day === 12
                                    }">
                                        <span x-text="day"></span>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <div class="bg-white rounded-[2rem] p-6 shadow-sm border border-gray-100 flex-1">
                            <h4 class="text-[10px] font-800 text-gray-400 uppercase tracking-widest mb-4">Pengingat Jadwal Terdekat</h4>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex items-center space-x-3 p-3 bg-blue-50 rounded-2xl border border-blue-100">
                                    <div class="w-8 h-8 bg-blue-600 rounded-xl flex items-center justify-center text-white text-xs"><i class="fas fa-info-circle"></i></div>
                                    <div>
                                        <p class="text-[10px] font-800 text-blue-900 leading-none">Rapat Pleno</p>
                                        <p class="text-[8px] text-blue-500 font-600 mt-1">13 Jan | 09:00 WIB</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3 p-3 bg-emerald-50 rounded-2xl border border-emerald-100">
                                    <div class="w-8 h-8 bg-emerald-500 rounded-xl flex items-center justify-center text-white text-xs"><i class="fas fa-chalkboard-teacher"></i></div>
                                    <div>
                                        <p class="text-[10px] font-800 text-emerald-900 leading-none">Kelas X MIPA 1</p>
                                        <p class="text-[8px] text-emerald-500 font-600 mt-1">12 Jan | 07:30 WIB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-5 bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-100 flex flex-col overflow-hidden">
                        <div class="text-center mb-8">
                            <span class="inline-block px-4 py-1.5 bg-gray-50 text-gray-400 text-[9px] font-800 uppercase tracking-[0.2em] rounded-full">Detail Agenda Hari Ini</span>
                            <h4 class="text-xs font-700 text-gray-800 mt-3">Senin, 05 Januari 2026</h4>
                        </div>

                        <div class="flex-1 space-y-4 overflow-y-auto custom-scroll pr-2">
                            <div class="group p-5 bg-white border border-gray-100 rounded-3xl hover:border-blue-200 hover:shadow-xl hover:shadow-blue-500/5 transition-all relative overflow-hidden">
                                <div class="absolute left-0 top-0 h-full w-1.5 bg-blue-600"></div>
                                <div class="flex justify-between items-start mb-3">
                                    <h5 class="text-[11px] font-800 text-gray-800 group-hover:text-blue-600 transition-colors">Rapat Pleno Nilai Raport</h5>
                                    <span class="text-[7px] font-800 bg-blue-50 text-blue-600 px-2 py-0.5 rounded-md uppercase tracking-tighter">Penting</span>
                                </div>
                                <div class="flex items-center space-x-4 text-[9px] font-700 text-gray-400">
                                    <span class="flex items-center space-x-1"><i class="far fa-clock"></i> <span>09:00 - 15:00 WIB</span></span>
                                    <span class="flex items-center space-x-1"><i class="fas fa-map-marker-alt"></i> <span>Ruang Guru</span></span>
                                </div>
                            </div>

                            <div class="group p-5 bg-white border border-gray-100 rounded-3xl hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-500/5 transition-all relative overflow-hidden">
                                <div class="absolute left-0 top-0 h-full w-1.5 bg-emerald-500"></div>
                                <div class="flex justify-between items-start mb-3">
                                    <h5 class="text-[11px] font-800 text-gray-800 group-hover:text-emerald-600 transition-colors">Jadwal Mengajar : X MIPA 1</h5>
                                </div>
                                <div class="flex items-center space-x-4 text-[9px] font-700 text-gray-400">
                                    <span class="flex items-center space-x-1"><i class="far fa-clock text-emerald-400"></i> <span>07:30 - 10:00 WIB</span></span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 grid grid-cols-2 gap-3 pt-6 border-t border-gray-50">
                            <div class="p-4 bg-gray-50/50 rounded-2xl text-center border border-gray-100 hover:bg-white transition-colors">
                                <p class="text-[8px] font-800 text-gray-400 uppercase mb-1">Total Sesi</p>
                                <p class="text-xl font-800 text-blue-600">12</p>
                            </div>
                            <div class="p-4 bg-gray-50/50 rounded-2xl text-center border border-gray-100 hover:bg-white transition-colors">
                                <p class="text-[8px] font-800 text-gray-400 uppercase mb-1">Selesai</p>
                                <p class="text-xl font-800 text-emerald-500">08</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>
