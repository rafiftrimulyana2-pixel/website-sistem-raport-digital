<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa - Raport Digital</title>
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
    <div class="max-w-6xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Daftar Seluruh Siswa</h1>
        <div class="flex justify-between items-center mb-6">
            <form action="/siswa" method="GET" class="mb-4 flex gap-2">
                <input type="text" name="cari" placeholder="Cari nama siswa..."
                value="{{ request('cari') }}"
                class="border p-2 rounded w-full md:w-80 focus:ring-2 focus:ring-blue-500 outline-none">

            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                Cari
            </button>
            @if(request('cari'))
                <a href="/siswa" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600 transition text-center">
                    Reset
                </a>
            @endif
        </form>

            <a href="/tambah_siswa" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                + Tambah Siswa Baru
            </a>
    </div>

        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="border border-gray p-3 text-center">NISN</th>
                    <th class="border border-gray p-3">Nama Lengkap</th>
                    <th class="border border-gray p-3 text-center">Kelas</th>
                    <th class="border border-gray-300 p-3 text-center">Aksi</th> </tr>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
                </tr>
            </thead>
            <tbody>
                @foreach($data_siswa as $s)
                <tr class="hover:bg-gray-50 transition">
                    <td class="border border-gray p-3 text-center">{{ $s->nisn }}</td>
                    <td class="border border-gray p-3">{{ $s->nama_siswa }}</td>
                    <td class="border border-gray p-3 text-center">{{ $s->kelas }}</td>
                    <td class="border border-gray-300 p-3 text-center">
                        <div class="flex justify-center gap-2">
                        <a href="/siswa/edit/{{ $s->id }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 text-sm">
                             <i class="fa-solid fa-pen-to-square mr-1"></i> Edit
                         </a>
                        <a href="/siswa/hapus/{{ $s->id }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">
                             <i class="fa-solid fa-trash mr-1"></i> Hapus
                         </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
