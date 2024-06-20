<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    protected $table = 'simpanan';

    protected $primaryKey = 'id';

    protected $fillable = [
        'no_anggota',
        'bulan',
        'tahun',
        'jumlah',
    ];

    protected $dates = [];

    public $timestamps = true;
}
