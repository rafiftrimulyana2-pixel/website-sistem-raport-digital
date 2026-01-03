<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
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
    <div class="max-w-lg mx-auto bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold mb-5">Edit Data Siswa</h1>
        <form action="/siswa/update/{{ $siswa->id }}" method="POST">
            @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <p class="font-bold">Gagal memperbarui data:</p>
            <ul class="mt-2 list-disc list-inside">
            @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
            @endforeach
                 </ul>
            </div>
             @endif
            @csrf
            <div class="mb-4">
                <label>NISN</label>
                <input type="text" name="nisn" value="{{ $siswa->nisn }}" class="w-full border p-2 rounded">
            </div>
            <div class="mb-4">
                <label>Nama Siswa</label>
                <input type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}" class="w-full border p-2 rounded">
            </div>
            <div class="mb-4">
                <label>Kelas</label>
                <input type="text" name="kelas" value="{{ $siswa->kelas }}" class="w-full border p-2 rounded">
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update Data</button>
            <a href="/siswa" class="text-gray-500 ml-4">Batal</a>
        </form>
    </div>
</body>
</html>
