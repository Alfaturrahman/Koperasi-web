<?php

namespace App\Http\Controllers;

use App\Models\PinjamanBiasa;
use Illuminate\Http\Request;

class PengawasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pengawas.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function validasiPeminjamanBiasa($id)
    {
        $peminjaman = PinjamanBiasa::findOrFail($id);
        
        if (request('action') === 'sedang menunggu validasi bendahara') {
            // Lakukan validasi dan perbarui status menjadi "Disetujui"
            $peminjaman->status = 'sedang menunggu validasi bendahara';
            $peminjaman->save();
        } elseif (request('action') === 'tolak') {
            // Lakukan validasi dan perbarui status menjadi "Ditolak"
            $peminjaman->status = 'tolak';
            $peminjaman->save();
        }
        
        return redirect()->back()->with('success', 'Pengajuan berhasil divalidasi.');
    }
    public function validasiPeminjamanKhusus($id)
    {
        $peminjaman = PinjamanBiasa::findOrFail($id);
        
        if (request('action') === 'sedang menunggu validasi bendahara') {
            // Lakukan validasi dan perbarui status menjadi "Disetujui"
            $peminjaman->status = 'sedang menunggu validasi bendahara';
            $peminjaman->save();
        } elseif (request('action') === 'tolak') {
            // Lakukan validasi dan perbarui status menjadi "Ditolak"
            $peminjaman->status = 'tolak';
            $peminjaman->save();
        }
        
        return redirect()->back()->with('success', 'Pengajuan berhasil divalidasi.');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
