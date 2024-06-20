<?php

namespace App\Http\Controllers;

use App\Models\PinjamanBiasa;
use Illuminate\Http\Request;

class PeminjamanUrgentController extends Controller
{
    public function index()
    {
        $pinjamanurgent = PinjamanBiasa::all();
        return view('anggota.status',['pinjamanbiasa' => $pinjamanurgent]);
    }
    public function index_ketua()
    {
        $pinjamanbiasa = PinjamanBiasa::all();
        return view('ketua.status_urgent',['pinjamanbiasa' => $pinjamanbiasa]);
    }

    public function index_bendahara()
    {
        $pinjamanurgent = PinjamanBiasa::all();
        return view('bendahara.status_urgent',['pinjamanurgent' => $pinjamanurgent]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.PeminjamanUrgent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_urgent(Request $request)
    {
        $request->validate([
            'no_anggota' => 'required',
            'nama' => 'required',
            'bagian' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'pekerjaan' => 'required',
            'jenis_pinjaman' => 'required',
            'besar_pinjaman' => 'required',
            'besar_angsuran' => 'required',
            'tanggal_permohonan' => 'required',
            'nomor_rekening' => 'required',
            'email' => 'required|email',
            'total_pinjaman' => 'required',
            'alasan_pinjaman' => 'required',
        ],[
            'no_anggota.required' => 'No_anggota harus diisi.',
            'nama.required' => 'Nama harus diisi.',
            'bagian.required' => 'Nama harus diisi.',
            'alamat.required' => 'Nama harus diisi.',
            'no_telp.required' => 'Nama harus diisi.',
            'pekerjaan.required' => 'Nama harus diisi.',
            'jenis_pinjaman.required' => 'Harus Diisi',
            'besar_pinjaman.required' => 'Nama harus diisi.',
            'besar_angsuran.required' => 'Nama harus diisi.',
            'tanggal_permohonan.required' => 'Nama harus diisi.',
            'nomor_rekening.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'total_pinjaman.required' => 'Total Pinjaman harus diisi.',
            'alasan_pinjaman.required' => 'Nama harus diisi.', 
            
        ]);

        PinjamanBiasa::create($request->all());
        
        return redirect()->route('anggota.status')->with('success', 'Peminjaman Berhasil diajukan.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pinjamanurgent = PinjamanBiasa::findOrFail($id);

    // Logika lainnya untuk menampilkan detail pinjaman

    return view('ketua.detail_PeminjamanBiasa', compact('pinjamanBiasa'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

