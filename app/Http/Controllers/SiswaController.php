<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
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
        // Mengambil parameter kelas dari URL, misal: ?kelas=X MIPA 1
        $kelasTerpilih = $request->query('kelas');

    if ($kelasTerpilih) {
        // Ambil data siswa hanya untuk kelas yang dipilih
        $semuaSiswa = Siswa::where('kelas', $kelasTerpilih)->get();

        // Arahkan ke halaman "Tampilan Baru" yaitu Profil Kelas
        return view('siswa_detail', compact('semuaSiswa', 'kelasTerpilih'));
        }

        // Jika belum pilih kelas, tampilkan kartu utama dengan data dari database
        $dataKelas = \App\Models\Kelas::all(); // Ambil semua data kelas
        return view('data_siswa', compact('dataKelas'));
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

    // Pastikan fungsinya menerima $id sesuai di route baris 74
    public function show($id)
    {
    // Mengambil data kelas berdasarkan ID yang diklik
    $kelasTerpilih = Kelas::findOrFail($id);

    // Mengambil siswa yang hanya terdaftar di kelas tersebut
    $semuaSiswa = Siswa::where('kelas_id', $id)->get();

    return view('siswa_detail', compact('semuaSiswa', 'kelasTerpilih'));

    // Mengambil data siswa spesifik, jika tidak ada akan muncul error 404
    $siswa = Siswa::findOrFail($id);

    // Kirim data siswa ke file view detail
    return view('siswa_detail', compact('siswa'));

    // Mengambil data satu siswa secara spesifik berdasarkan ID
    $siswa = Siswa::findOrFail($id);

    // Mengarahkan ke file view profil (misal: profile_siswa.blade.php)
    return view('profile_siswa', compact('siswa'));
    }

    public function show_detail($id)
    {
        // Mengambil data siswa spesifik untuk ditampilkan di profil
        $siswa = Siswa::findOrFail($id);

        // Memanggil file view yang berada langsung di folder views
        return view('profil_siswa', compact('siswa'));
    }
}
