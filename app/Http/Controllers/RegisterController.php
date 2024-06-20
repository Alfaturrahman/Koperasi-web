<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\CalonAnggota;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            // Add validation rules for other form fields
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:10000',
            'foto_ktp' => 'required|image|mimes:jpeg,png,jpg|max:10000',
            'ttd' => 'required|image|mimes:jpeg,png,jpg|max:10000',
            'id_card' => 'required|image|mimes:jpeg,png,jpg|max:10000',
        ]);

        $fotoPath = $request->file('foto')->store('img');
        $fotoKtpPath = $request->file('foto_ktp')->store('img');
        $ttdPath = $request->file('ttd')->store('img');
        $idCardPath = $request->file('id_card')->store('img');

        $data = [
            'nama_lengkap' => $request->input('nama_lengkap'),
            'nomor_ktp' => $request->input('nomor_ktp'),
            'masa_berlaku_ktp' => $request->input('masa_berlaku_ktp'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => Carbon::parse($request->input('tanggal_lahir')),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat_ktp' => $request->input('alamat_ktp'),
            'kelurahan_ktp' => $request->input('kelurahan_ktp'),
            'kecamatan_ktp' => $request->input('kecamatan_ktp'),
            'kota_ktp' => $request->input('kota_ktp'),
            'kodepos_ktp' => $request->input('kodepos_ktp'),
            'alamat' => $request->input('alamat'),
            'kelurahan' => $request->input('kelurahan'),
            'kecamatan' => $request->input('kecamatan'),
            'kota' => $request->input('kota'),
            'kodepos' => $request->input('kodepos'),
            'no_telepon_rumah' => $request->input('no_telepon_rumah'),
            'no_telepon_hp' => $request->input('no_telepon_hp'),
            'status_tempat_tinggal' => $request->input('status_tempat_tinggal'),
            'menempati_alamat_tsb_sejak' => Carbon::parse($request->input('menempati_alamat_tsb_sejak')),
            'pendidikan_terakhir' => $request->input('pendidikan_terakhir'),
            'status_perkawinan' => $request->input('status_perkawinan'),
            'nama_istri_suami' => $request->input('nama_istri_suami'),
            'jumlah_anak' => $request->input('jumlah_anak'),
            'nama_ibu_kandung_pemohon' => $request->input('nama_ibu_kandung_pemohon'),
            'npwp_pribadi' => $request->input('npwp_pribadi'),
            'nama_ahli_waris' => $request->input('nama_ahli_waris'),
            'hubungan_ahli_waris' => $request->input('hubungan_ahli_waris'),
            'no_telp_ext_kantor' => $request->input('no_telp_ext_kantor'),
            'nik' => $request->input('nik'),
            'nomor_rekening' => $request->input('nomor_rekening'),
            'bagian' => $request->input('bagian'),
            'tgl_masuk_keperusahaan' => Carbon::parse($request->input('tgl_masuk_keperusahaan')),
            'status_karyawan' => $request->input('status_karyawan'),
            'tanggal_daftar' => Carbon::now()->toDateTimeString(),
            'foto' => $fotoPath,
            'foto_ktp' => $fotoKtpPath,
            'ttd' => $ttdPath,
            'id_card' => $idCardPath,
        ];

        // Assuming you have an Eloquent model called 'CalonAnggota'
        $calonAnggota = CalonAnggota::create($data);

        if ($calonAnggota) {
            return redirect('register')->with('success', 'Pendaftaran Akun Berhasil.');
        } else {
            return redirect('register')->with('error', 'Pendaftaran Akun Gagal.');
        }
    }
}
