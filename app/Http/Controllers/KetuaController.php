<?php

namespace App\Http\Controllers;

use App\Models\PinjamanBiasa;
use Illuminate\Http\Request;
use App\Models\CalonAnggota;
use App\Models\Anggota;
use App\Models\Simpanan;
use App\Models\Pengguna;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class KetuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ketua.dashboard');
    }

    public function DataAnggota(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $anggotaData = DB::select("
                SELECT anggota.no_anggota, anggota.nama_lengkap, anggota.status, SUM(simpanan.jumlah) AS total_simpanan
                FROM anggota
                LEFT JOIN simpanan ON anggota.no_anggota = simpanan.no_anggota
                WHERE anggota.nama_lengkap LIKE '%" . $search . "%'
                GROUP BY anggota.no_anggota
            ");
        } else {
            $anggotaData = DB::select("
                SELECT anggota.no_anggota, anggota.nama_lengkap, anggota.status, SUM(simpanan.jumlah) AS total_simpanan
                FROM anggota
                LEFT JOIN simpanan ON anggota.no_anggota = simpanan.no_anggota
                GROUP BY anggota.no_anggota
            ");
        }

        return view('/ketua/data_anggota', ['anggotaData' => $anggotaData]);
    }

    public function validasiPeminjamanBiasa($id)
    {
        $peminjaman = PinjamanBiasa::findOrFail($id);

        if (request('action') === 'terima') {
            // Lakukan validasi dan perbarui status menjadi "Disetujui"
            $peminjaman->status = 'terima';
            $peminjaman->save();
        } elseif (request('action') === 'tolak') {
            // Lakukan validasi dan perbarui status menjadi "Ditolak"
            $peminjaman->status = 'tolak';
            $peminjaman->save();
        }

        return redirect()->back()->with('success', 'Pengajuan berhasil divalidasi.');
    }

    public function store(Request $request)
    {
        $id = $request->input('id');
        $calonAnggota = CalonAnggota::find($id);

        if (!$calonAnggota) {
            return "Calon anggota dengan ID $id tidak ditemukan.";
        }

        $anggota = new Anggota;
        $anggota->no_anggota = $request->input('no_anggota');
        $anggota->nama_lengkap = $calonAnggota->nama_lengkap;
        $anggota->nomor_ktp = $calonAnggota->nomor_ktp;
        $anggota->masa_berlaku_ktp = $calonAnggota->masa_berlaku_ktp;
        $anggota->tempat_lahir = $calonAnggota->tempat_lahir;
        $anggota->tanggal_lahir = $calonAnggota->tanggal_lahir;
        $anggota->jenis_kelamin = $calonAnggota->jenis_kelamin;
        $anggota->alamat_ktp = $calonAnggota->alamat_ktp;
        $anggota->kelurahan_ktp = $calonAnggota->kelurahan_ktp;
        $anggota->kecamatan_ktp = $calonAnggota->kecamatan_ktp;
        $anggota->kota_ktp = $calonAnggota->kota_ktp;
        $anggota->kodepos_ktp = $calonAnggota->kodepos_ktp;
        $anggota->alamat = $calonAnggota->alamat;
        $anggota->kelurahan = $calonAnggota->kelurahan;
        $anggota->kecamatan = $calonAnggota->kecamatan;
        $anggota->kota = $calonAnggota->kota;
        $anggota->kodepos = $calonAnggota->kodepos;
        $anggota->no_telepon_rumah = $calonAnggota->no_telepon_rumah;
        $anggota->no_telepon_hp = $calonAnggota->no_telepon_hp;
        $anggota->status_tempat_tinggal = $calonAnggota->status_tempat_tinggal;
        $anggota->menempati_alamat_tsb_sejak = $calonAnggota->menempati_alamat_tsb_sejak;
        $anggota->pendidikan_terakhir = $calonAnggota->pendidikan_terakhir;
        $anggota->status_perkawinan = $calonAnggota->status_perkawinan;
        $anggota->nama_istri_suami = $calonAnggota->nama_istri_suami;
        $anggota->jumlah_anak = $calonAnggota->jumlah_anak;
        $anggota->nama_ibu_kandung_pemohon = $calonAnggota->nama_ibu_kandung_pemohon;
        $anggota->npwp_pribadi = $calonAnggota->npwp_pribadi;
        $anggota->nama_ahli_waris = $calonAnggota->nama_ahli_waris;
        $anggota->hubungan_ahli_waris = $calonAnggota->hubungan_ahli_waris;
        $anggota->no_telp_ext_kantor = $calonAnggota->no_telp_ext_kantor;
        $anggota->nik = $calonAnggota->nik;
        $anggota->nomor_rekening = $calonAnggota->nomor_rekening;
        $anggota->bagian = $calonAnggota->bagian;
        $anggota->tgl_masuk_keperusahaan = $calonAnggota->tgl_masuk_keperusahaan;
        $anggota->status_karyawan = $calonAnggota->status_karyawan;
        $anggota->foto = $calonAnggota->foto;
        $anggota->foto_ktp = $calonAnggota->foto_ktp;
        $anggota->ttd = $calonAnggota->ttd;
        $anggota->id_card = $calonAnggota->id_card;
        $anggota->tanggal_gabung = $calonAnggota->tanggal_gabung;
        $anggota->status = $calonAnggota->status;

        // Save the new member to the anggota table
        $anggota->save();

        $simpanan = new Simpanan;
        $simpanan->no_anggota = $request->input('no_anggota');
        $simpanan->bulan = $request->input('bulan');
        $simpanan->tahun = $request->input('tahun');
        $simpanan->jumlah = $request->input('jumlah');

        // Save the new member's simpanan data
        $anggota->simpanan()->save($simpanan);

        $pengguna = new User();
        $pengguna->no_anggota = $request->input('no_anggota');
        $pengguna->nama_lengkap = $calonAnggota->nama_lengkap;
        $pengguna->password = $request->input('password');
        $pengguna->roles = $request->input('roles');

        // Save the new member's pengguna data
        $anggota->pengguna()->save($pengguna);

        // Delete the data from the calon_anggota table
        $calonAnggota->delete();

        return redirect()->route('calon_anggota.index')->with('success', 'Anggota berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function showDetailAnggota($id)
    {
        $data = Anggota::findOrFail($id);

        return view('/ketua/detail_anggota', compact('data'));
    }

    public function detailSimpanan($id)
    {
        // Retrieve member data from the database
        $data = Anggota::join('simpanan', 'anggota.no_anggota', '=', 'simpanan.no_anggota')
    ->where('anggota.no_anggota', $id)
    ->groupBy('anggota.no_anggota', 'anggota.nama_lengkap')
    ->select('anggota.no_anggota', 'anggota.nama_lengkap', DB::raw('SUM(simpanan.jumlah) as total_simpanan'))
    ->first();

        if ($data) {
            // Retrieve monthly savings data from the database
            $monthlySavings = Simpanan::where('no_anggota', $id)->get();

            return view('/ketua/detail_simpanan', compact('data', 'monthlySavings'));
        }

        return redirect()->back()->with('error', 'Member not found.');
    }

    public function dataCalon(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $candidates = CalonAnggota::where('nama_lengkap', $search)->get();
        } else {
            $candidates = CalonAnggota::all();
        }

        return view('/ketua/calon_anggota', ['candidates' => $candidates]);
    }

    public function showDetailCalon($id)
    {
        $data = CalonAnggota::findOrFail($id);

        return view('/ketua/detail_calon', compact('data'));
    }
}

