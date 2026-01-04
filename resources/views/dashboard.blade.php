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

    <div class="flex h-screen">
        <aside class="w-64 bg-[#0a113d] text-white flex flex-col">
            <div class="p-6 text-2xl font-bold border-b border-blue-800">
                E-Raport Guru
            </div>
            <nav class="flex-1 mt-4 px-4 space-y-2">
                <a href="#" class="block py-2.5 px-4 rounded bg-blue-600">Dashboard</a>
                <a href="/siswa" class="block py-2.5 px-4 rounded hover:bg-blue-800 transition">Data Siswa</a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-800 transition">Input Nilai Raport</a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-800 transition">Analisis Rekomendasi</a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-800 transition">Cetak / Export</a>
            </nav>

            <div class="p-4 border-t border-blue-800">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="w-full text-left py-2 px-4 rounded hover:bg-red-600 transition">
                        <i class="fa-solid fa-right-from-bracket mr-2"></i> Pengaturan / Keluar
                    </button>
                </form>
            </div>
        </aside>

        <main class="flex-1 overflow-y-auto">
            <header class="bg-white shadow-sm p-4 flex justify-between items-center px-8">
                <h1 class="text-xl font-bold text-blue-800">Ringkasan Aktivitas</h1>
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-500 italic">Semester Ganjil 2025/2026</span>
                    <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold">
                        RS
                    </div>
                </div>
        </header>

        <div class="p-8">
            <div class="bg-blue-700 rounded-2xl p-8 text-white mb-8 flex justify-between items-center shadow-lg">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Selamat Pagi,{{ Auth::user()->name }}</h2>
                    <p class="opacity-80">Status Semester Ganjil 2025/2026 : Input nilai mencapai 84% dari 97 siswa.</p>
                </div>
                <button class="bg-white text-blue-700 px-6 py-2 rounded-xl font-bold hover:bg-gray-100 transition">
                    Input Nilai Baru
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 mb-8">

    <div class="bg-blue-50/50 p-4 rounded-2xl border border-blue-100 flex items-center hover:scale-105 transition-transform duration-300">
        <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center text-white mr-3 shadow-lg shadow-blue-200">
            <i class="fas fa-user-graduate text-sm"></i>
        </div>
        <div>
            <p class="text-[10px] text-blue-500 font-bold uppercase tracking-wider">Total Siswa</p>
            <h3 class="text-lg font-extrabold text-blue-900">1.240</h3>
        </div>
    </div>

    <div class="bg-amber-50/50 p-4 rounded-2xl border border-amber-100 flex items-center hover:scale-105 transition-transform duration-300">
        <div class="w-10 h-10 bg-amber-500 rounded-xl flex items-center justify-center text-white mr-3 shadow-lg shadow-amber-200">
            <i class="fas fa-clipboard-list text-sm"></i>
        </div>
        <div>
            <p class="text-[10px] text-amber-600 font-bold uppercase tracking-wider">Kelengkapan</p>
            <h3 class="text-lg font-extrabold text-amber-900">85%</h3>
        </div>
    </div>

    <div class="bg-emerald-50/50 p-4 rounded-2xl border border-emerald-100 flex items-center hover:scale-105 transition-transform duration-300">
        <div class="w-10 h-10 bg-emerald-500 rounded-xl flex items-center justify-center text-white mr-3 shadow-lg shadow-emerald-200">
            <i class="fas fa-check-double text-sm"></i>
        </div>
        <div>
            <p class="text-[10px] text-emerald-600 font-bold uppercase tracking-wider">Tuntas</p>
            <h3 class="text-lg font-extrabold text-emerald-900">92%</h3>
        </div>
    </div>

    <div class="bg-rose-50/50 p-4 rounded-2xl border border-rose-100 flex items-center hover:scale-105 transition-transform duration-300">
        <div class="w-10 h-10 bg-rose-500 rounded-xl flex items-center justify-center text-white mr-3 shadow-lg shadow-rose-200">
            <i class="fas fa-bell text-sm"></i>
        </div>
        <div>
            <p class="text-[10px] text-rose-600 font-bold uppercase tracking-wider">Batas Akhir</p>
            <h3 class="text-lg font-extrabold text-rose-900">31 Des</h3>
        </div>
    </div>
</div>
            </div>
        </main>
    </div>
</body>
</html>
