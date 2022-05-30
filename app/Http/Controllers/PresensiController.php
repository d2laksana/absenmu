<?php

namespace App\Http\Controllers;

use App\Models\CodePresensi;
use App\Models\JadwalMapel;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Presensi;
use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresensiController extends Controller
{
    public function index()
    {   
        $guru_id = Auth::user()->guru_id;
        $data = JadwalMapel::where('guru_id', $guru_id)->get();

        return view('generate-presensi', compact('data'));
    }

    public function simpan(Request $request)
    {
        CodePresensi::create([
            'code_presensi' => $request->presensi,
            'jadwal_id' => $request->jadwal_id,
            'waktu_awal' => $request->waktu_awal,
            'waktu_akhir' => $request->waktu_akhir
        ]);

        return redirect('/dashboard');
    }

    public function presensiSiswa()
    {
        $waktu = Carbon::now();
        $dataPresensi = CodePresensi::where('code_presensi', 'VKZl5RupLl')->first();
        return view('presensi-siswa', compact('waktu', 'dataPresensi'));
    }

    public function cekPresensi(Request $request)
    {
        $id_kelas_siswa = auth()->user()->siswa->kelas_id;
        $codePresensi = $request->presensi;

        $dataPresensi = CodePresensi::where('code_presensi', $codePresensi)->first();

        if ($dataPresensi->jadwal->kelas_id !== $id_kelas_siswa) return back()->with('error', 'anda bukan kelas ini');
        
        if (Carbon::now() < $dataPresensi->waktu_awal || Carbon::now() > $dataPresensi->waktu_akhir) return back()->with('error' , 'Bukan waktu untuk presensi');

        Presensi::create([
            'siswa_id' => auth()->user()->siswa_id,
            'jadwal_id' => $dataPresensi->jadwal_id,
            'status' => 'hadir',
        ]);
    }
}
