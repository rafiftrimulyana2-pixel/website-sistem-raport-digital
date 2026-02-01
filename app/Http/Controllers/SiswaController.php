<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // 1. Menampilkan Dashboard (Target Nomor 3)
    public function dashboard()
    {
        $total_siswa = Siswa::count();
        return view('dashboard', compact('total_siswa'));
    }

    // 2. Menampilkan Daftar Siswa (Index)
    public function index(Request $request)
    {
        // Mengambil semua data siswa dari database
        $semuaSiswa = Siswa::all();

    // Mengirim ke halaman daftar siswa
        return view('data.siswa', compact('semuaSiswa'));
    }

    // 3. Menyimpan Data Baru (Store) dengan Validasi (Target Nomor 2)
    public function store(Request $request)
    {
        $request->validate([
            'nisn'       => 'required|numeric|unique:siswas,nisn',
            'nama_siswa' => 'required|min:3',
            'kelas'      => 'required',
        ], [
            'nisn.required'       => 'NISN wajib diisi!',
            'nisn.unique'         => 'NISN ini sudah terdaftar!',
            'nama_siswa.required' => 'Nama siswa tidak boleh kosong!',
        ]);

        Siswa::create([
            'nisn'       => $request->nisn,
            'nama_siswa' => $request->nama_siswa,
            'kelas'      => $request->kelas,
        ]);

        return redirect('/siswa')->with('sukses', 'Data berhasil ditambahkan!');
    }

    // 4. Menampilkan Halaman Edit
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('edit_siswa', compact('siswa'));
    }

    // 5. Memperbarui Data (Update)
    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->update([
            'nisn'       => $request->nisn,
            'nama_siswa' => $request->nama_siswa,
            'kelas'      => $request->kelas,
        ]);

        return redirect('/siswa');
    }

    // 6. Menghapus Data (Destroy)
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/siswa');
    }
}
