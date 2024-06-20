<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    protected $table = 'staf';

    protected $primaryKey = 'id';

    protected $fillable = [
        'no_anggota',
        'tanggal_dipilih',
        'tanggal_berhenti',
        'sebab_berhenti',
    ];

    protected $dates = [
        'tanggal_dipilih',
        'tanggal_berhenti',
    ];

    public $timestamps = true;
}
