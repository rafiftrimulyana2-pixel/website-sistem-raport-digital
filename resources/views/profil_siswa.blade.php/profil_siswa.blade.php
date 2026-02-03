<div class="bg-white rounded-[45px] p-10 shadow-sm border border-slate-100 mt-8">
    <h3 class="text-xl text-slate-800 mb-8 flex items-center gap-3">
        <span class="w-8 h-8 rounded-xl bg-emerald-50 text-emerald-500 flex items-center justify-center text-sm">
            <i class="fas fa-users"></i>
        </span>
        Informasi Keluarga
    </h3>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <div class="space-y-4">
            <p class="text-[10px] text-emerald-500 inter-bold uppercase tracking-[0.2em]">Data Ayah Kandung</p>
            <div class="bg-slate-50/50 p-6 rounded-[30px] border border-slate-100">
                <p class="text-[10px] text-slate-400 uppercase mb-1">Nama Ayah</p>
                <p class="text-sm text-slate-700 inter-bold mb-4">{{ $siswa->nama_ayah ?? 'Belum Diisi' }}</p>
                <p class="text-[10px] text-slate-400 uppercase mb-1">Pekerjaan</p>
                <p class="text-sm text-slate-700 inter-bold">{{ $siswa->pekerjaan_ayah ?? '-' }}</p>
            </div>
        </div>

        <div class="space-y-4">
            <p class="text-[10px] text-rose-500 inter-bold uppercase tracking-[0.2em]">Data Ibu Kandung</p>
            <div class="bg-slate-50/50 p-6 rounded-[30px] border border-slate-100">
                <p class="text-[10px] text-slate-400 uppercase mb-1">Nama Ibu</p>
                <p class="text-sm text-slate-700 inter-bold mb-4">{{ $siswa->nama_ibu ?? 'Belum Diisi' }}</p>
                <p class="text-[10px] text-slate-400 uppercase mb-1">Pekerjaan</p>
                <p class="text-sm text-slate-700 inter-bold">{{ $siswa->pekerjaan_ibu ?? '-' }}</p>
            </div>
        </div>
    </div>
</div>
