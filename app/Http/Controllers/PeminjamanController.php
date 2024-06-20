<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    function biasa(){
        return view('anggota.PeminjamanBiasa');
    }
    function khusus(){
        return view('anggota.PeminjamanKhusus');
    }
    function urgent(){
        return view('anggota.PeminjamanUrgent');
    }
}
