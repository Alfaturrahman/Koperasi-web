<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sesi.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    function login(Request $request){
        $request->validate([
            'no_anggota' => 'required',
            'password' => 'required',
        ],
        [
            'no_anggota.required' => 'No Anggota wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'no_anggota' => $request->no_anggota,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){

            // Ambil data anggota yang terkait dengan pengguna saat ini
            $dataAnggota = Anggota::where('no_anggota', $request->no_anggota)->first();
            

            // Tambahkan data anggota ke dalam sesi

            $request->session()->put('dataAnggota', $dataAnggota);
            
            if(Auth::user()->role =='ketua'){
                return redirect('/ketua/dashboard');
            } elseif (Auth::user()->role =='pengawas'){
                return redirect('/pengawas/dashboard');
            } elseif (Auth::user()->role =='anggota'){
                return redirect('/anggota/data_anggota');
            } elseif (Auth::user()->role =='bendahara'){
                return redirect('/bendahara/dashboard');
    }else{
            return redirect('')->withErrors('No anggota atau Pasword tidak sesuai')->withInput();
        }
    }
}
    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->flush();
    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('login');
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
