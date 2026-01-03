<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Raport - Tambah Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <nav class="bg-blue-600 p-4 mb-6 shadow-md">
        <div class="max-w-6xl mx-auto flex justify-between items-center text-white">
            <h1 class="font-bold text-lg">Raport Digital</h1>
            <div class="space-x-4">
                 <a href="/dashboard" class="hover:text-blue-200">Dashboard</a>
                 <a href="/siswa" class="hover:text-blue-200">Daftar Siswa</a>
                 <a href="/tambah_siswa" class="hover:text-blue-200">Tambah Siswa</a>
            </div>
        </div>
    </nav>
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-5 text-center">Tambah Siswa Baru</h1>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                 <strong class="font-bold">Ups! Ada kesalahan:</strong>
                <ul class="mt-2 list-disc list-inside">
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                </ul>
            </div>
             @endif

        <form action="/simpan-siswa" method="POST" class="space-y-4">
            @csrf <div>
                <label class="block font-semibold">NISN</label>
                <input type="text" name="nisn" class="w-full border p-2 rounded focus:outline-blue-500" placeholder="Contoh: 0012345" required>
            </div>

            <div>
                <label class="block font-semibold">Nama Siswa</label>
                <input type="text" name="nama_siswa" class="w-full border p-2 rounded focus:outline-blue-500" placeholder="Nama Lengkap" required>
            </div>

            <div>
                <label class="block font-semibold">Kelas</label>
                <input type="text" name="kelas" class="w-full border p-2 rounded focus:outline-blue-500" placeholder="Contoh: XII-RPL" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
                Simpan Data Siswa
            </button>
        </form>
    </div>
</body>
</html>
