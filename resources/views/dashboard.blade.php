<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Raport Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10 text-center">
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Ringkasan Data</h1>

        <div class="bg-blue-600 text-white p-6 rounded-xl shadow-inner">
            <p class="text-sm opacity-80 uppercase tracking-widest">Total Siswa</p>
            <h2 class="text-5xl font-extrabold mt-2">{{ $total_siswa }}</h2>
        </div>

        <div class="mt-8 grid grid-cols-2 gap-4">
            <a href="/siswa" class="bg-gray-200 p-3 rounded hover:bg-gray-300 transition font-semibold">
                Daftar Siswa
            </a>
            <a href="/tambah_siswa" class="bg-green-500 text-white p-3 rounded hover:bg-green-600 transition font-semibold">
                Tambah Baru
            </a>
        </div>
    </div>
</body>
</html>
