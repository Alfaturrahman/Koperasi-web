<?php namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Simpanan;
use App\Models\CalonAnggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller {
    public function index(Request $request)
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

    return view('/anggota/data_anggota', ['anggotaData' => $anggotaData]);
}

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
