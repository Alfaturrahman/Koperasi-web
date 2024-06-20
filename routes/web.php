<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BendaharaController;
use App\Http\Controllers\KetuaController;
use App\Http\Controllers\PeminjamanBiasaController;
use App\Http\Controllers\PeminjamanUrgentController;
use App\Http\Controllers\PeminjamanKhususController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengawasController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/detail-pinjaman', function () {
    return view('bendahara.detail_pinjaman');
});

Route::get('/detail-angsuran', function () {
    return view('bendahara.detail_angsuran');
});


// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

#login
Route::get('/sesi',[SesiController::class,'index'])->name('login');
Route::post('/sesi/login',[SesiController::class,'login']);
Route::get('/logout',[SesiController::class,'logout']);

#ketua
Route::get('/ketua/dashboard',[KetuaController::class,'index'])->middleware('userAkses:ketua');
Route::get('/ketua/data_anggota',[KetuaController::class,'data_anggota'])->middleware('userAkses:ketua');
Route::get('/ketua/calon_anggota',[KetuaController::class,'calon_anggota'])->middleware('userAkses:ketua');
Route::get('/ketua/status_biasa', [PeminjamanBiasaController::class, 'index_ketua']);
Route::get('/ketua/status_urgent', [PeminjamanUrgentController::class, 'index_ketua']);
Route::get('/ketua/status_khusus', [PeminjamanKhususController::class, 'index_ketua']);
Route::get('/ketua/data_anggota', [KetuaController::class, 'DataAnggota'])->name('data_anggota');
Route::get('/ketua/detail_anggota/{id}', [KetuaController::class, 'showDetailAnggota'])->name('detail_anggota');
Route::get('/ketua/detail_simpanan/{id}', [KetuaController::class, 'detailSimpanan'])->name('detail_simpanan');
Route::get('/ketua/calon_anggota', [KetuaController::class, 'dataCalon'])->name('calon_anggota');
Route::get('/ketua/detail_calon/{id}', [KetuaController::class, 'showDetailCalon'])->name('detail_calon');
Route::get('/ketua/detail/{id}', [PeminjamanBiasaController::class, 'show'])->name('ketua.detail_PeminjamanBiasa');
// routes/web.php

Route::post('/ketua/validasi-peminjaman-biasa/{id}', [KetuaController::class,'validasiPeminjamanBiasa'])->name('ketua.validasi_PeminjamanBiasa');
Route::post('/ketua/validasi-peminjaman-urgent/{id}', [KetuaController::class,'validasiPeminjamanUrgent'])->name('ketua.validasi_PeminjamanUrgent');
Route::post('/ketua/validasi-peminjaman-khusus/{id}', [KetuaController::class,'validasiPeminjamanKhusus'])->name('ketua.validasi_PeminjamanKhusus');

#pengawas
Route::get('/pengawas/dashboard',[PengawasController::class,'index'])->middleware('userAkses:pengawas');
Route::get('/pengawas/status_biasa', [PeminjamanBiasaController::class, 'index_pengawas']);
Route::get('/pengawas/status_khusus', [PeminjamanKhususController::class, 'index_pengawas']);
Route::post('/pengawas/validasi-peminjaman-biasa/{id}', [PengawasController::class,'validasiPeminjamanBiasa'])->name('pengawas.validasi_PeminjamanBiasa');
Route::post('/pengawas/validasi-peminjaman-khusus/{id}', [PengawasController::class,'validasiPeminjamanKhusus'])->name('pengawas.validasi_PeminjamanKhusus');

#bendahara
Route::get('/bendahara/dashboard',[BendaharaController::class,'index']);
Route::get('/bendahara/angsuran',[BendaharaController::class,'angsuran']);
Route::get('/bendahara/update',[BendaharaController::class,'updateAngsuran']);
Route::get('/bendahara/status_biasa', [PeminjamanBiasaController::class, 'index_bendahara']);
Route::get('/bendahara/status_urgent', [PeminjamanUrgentController::class, 'index_bendahara']);
Route::get('/bendahara/status_khusus', [PeminjamanKhususController::class, 'index_bendahara']);
Route::post('/bendahara/validasi-peminjaman-biasa/{id}', [BendaharaController::class,'validasiPeminjamanBiasa'])->name('bendahara.validasi_PeminjamanBiasa');
Route::post('/bendahara/validasi-peminjaman-urgent/{id}', [BendaharaController::class,'validasiPeminjamanUrgent'])->name('bendahara.validasi_PeminjamanUrgent');
Route::post('/bendahara/validasi-peminjaman-khusus/{id}', [BendaharaController::class,'validasiPeminjamanKhusus'])->name('bendahara.validasi_PeminjamanKhusus');
// Route::get('/bendahara/detail-pinjaman/{id}', [BendaharaController::class, 'detail_pinjaman'])->name('bendahara.detail_Pinjaman');
// Route::get('/bendahara/detail-angsuran/{id}', [BendaharaController::class, 'detail_angsuran'])->name('bendahara.detail_Angsuran');

#anggota
Route::get('/anggota/data_anggota',[AnggotaController::class,'index'])->middleware('userAkses:anggota');
// Route::get('/anggota/formbiasa',[PeminjamanController::class,'biasa'])->middleware('userAkses:anggota');;
Route::get('/anggota/formkhusus',[PeminjamanController::class,'khusus'])->middleware('userAkses:anggota');;

#PINJAMAN BIASA
Route::get('/anggota/formbiasa', [PeminjamanBiasaController::class, 'create'])->name('anggota.create');
Route::post('/anggota/formbiasa', [PeminjamanBiasaController::class, 'store'])->name('anggota.store');
Route::get('/anggota/status', [PeminjamanBiasaController::class, 'index'])->name('anggota.status');

#PINJAMAN KHUSUS
Route::get('/anggota/formkhusus', [PeminjamanKhususController::class, 'create']);
Route::post('/anggota/formkhusus', [PeminjamanKhususController::class, 'store']);
#PINJAMAN URGENT
Route::get('/anggota/formurgent',[PeminjamanUrgentController::class,'create']);
Route::post('/anggota/formurgent',[PeminjamanUrgentController::class,'store_urgent'])->name('anggota.store_urgent');



Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('/register', function () {
    return view('register');
})->name('register');

