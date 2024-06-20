<?php

namespace App\Http\Controllers;

use App\Models\PinjamanBiasa;
use Illuminate\Http\Request;

class BendaharaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bendahara.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function validasiPeminjamanBiasa($id)
    {
        $peminjaman = PinjamanBiasa::findOrFail($id);
        
        if (request('action') === 'sedang menunggu validasi ketua') {
            // Lakukan validasi dan perbarui status menjadi "Disetujui"
            $peminjaman->status = 'sedang menunggu validasi ketua';
            $peminjaman->save();
        } elseif (request('action') === 'tolak') {
            // Lakukan validasi dan perbarui status menjadi "Ditolak"
            $peminjaman->status = 'tolak';
            $peminjaman->save();
        }
        
        return redirect()->back()->with('success', 'Pengajuan berhasil divalidasi.');
    }
    public function angsuran(){
        return view('bendahara.angsuran');
    }
    
    // public function Updateangsuran(){
    //     return view('bendahara.updateAngsuran');
    // }
    public function detail_pinjaman($id)
    {
        $pinjamanBiasa = PinjamanBiasa::findOrFail($id);

    // Logika lainnya untuk menampilkan detail pinjaman

    return view('bendahara.detail_Pinjaman', compact('pinjamanBiasa'));

    }

    public function detail_angsuran($id)
    {
        $pinjamanBiasa = PinjamanBiasa::findOrFail($id);

    // Logika lainnya untuk menampilkan detail pinjaman

    return view('bendahara.detail_Angsuran', compact('pinjamanBiasa'));

    }

    public function validasiPeminjamanUrgent($id)
    {
        $peminjaman = PinjamanBiasa::findOrFail($id);
        
        if (request('action') === 'sedang menunggu validasi ketua') {
            // Lakukan validasi dan perbarui status menjadi "Disetujui"
            $peminjaman->status = 'sedang menunggu validasi ketua';
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
        
        if (request('action') === 'sedang menunggu validasi ketua') {
            // Lakukan validasi dan perbarui status menjadi "Disetujui"
            $peminjaman->status = 'sedang menunggu validasi ketua';
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
