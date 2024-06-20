<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class UserAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (Auth::check() && Auth::user()->role == $role) {

            // Ambil data anggota yang terkait dengan pengguna saat ini
            $dataAnggota = Auth::user()->anggota;

            // Tambahkan data anggota ke dalam sesi
            $request->session()->put('dataAnggota', $dataAnggota);
            
            return $next($request);
        }

        return redirect()->route('login')->withErrors('Anda Harus Login Terlebih Dahulu.');
    }
}
