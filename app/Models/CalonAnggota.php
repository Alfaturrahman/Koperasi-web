<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalonAnggota extends Model
{
    protected $table = 'calon_anggota';

    protected $primaryKey = 'nomor_ktp';

    protected $fillable = [
        'nama_lengkap',
        'nomor_ktp',
        'masa_berlaku_ktp',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat_ktp',
        'kelurahan_ktp',
        'kecamatan_ktp',
        'kota_ktp',
        'kodepos_ktp',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kota',
        'kodepos',
        'no_telepon_rumah',
        'no_telepon_hp',
        'status_tempat_tinggal',
        'menempati_alamat_tsb_sejak',
        'pendidikan_terakhir',
        'status_perkawinan',
        'nama_istri_suami',
        'jumlah_anak',
        'nama_ibu_kandung_pemohon',
        'npwp_pribadi',
        'nama_ahli_waris',
        'hubungan_ahli_waris',
        'no_telp_ext_kantor',
        'nik',
        'nomor_rekening',
        'bagian',
        'tgl_masuk_keperusahaan',
        'status_karyawan',
        'foto',
        'foto_ktp',
        'ttd',
        'id_card',
        'tanggal_daftar'
    ];

    protected $dates = [
        'tanggal_lahir',
        'menempati_alamat_tsb_sejak',
        'tgl_masuk_keperusahaan',
        'tanggal_daftar',
    ];

    public $timestamps = false;
}
