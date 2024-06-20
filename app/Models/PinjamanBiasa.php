<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamanBiasa extends Model
{
    use HasFactory;
    
    protected $table = 'pinjaman_biasa';

    protected $fillable = array(
        'no_anggota',
        'nama',
        'bagian',
        'alamat',
        'no_telp',
        'pekerjaan',
        'jenis_pinjaman',
        'besar_pinjaman',
        'besar_angsuran',
        'tanggal_permohonan',
        'nomor_rekening',
        'email',
        'total_pinjaman',
        'alasan_pinjaman'
    
    );
}
