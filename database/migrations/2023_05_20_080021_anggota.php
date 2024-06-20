<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->string('no_anggota', 225)->primary();
            $table->string('nama_lengkap', 225);
            $table->string('nomor_ktp', 225);
            $table->string('masa_berlaku_ktp', 225);
            $table->string('tempat_lahir', 225);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('alamat_ktp', 225);
            $table->string('kelurahan_ktp', 225);
            $table->string('kecamatan_ktp', 225);
            $table->string('kota_ktp', 225);
            $table->string('kodepos_ktp', 225);
            $table->string('alamat', 225);
            $table->string('kelurahan', 225);
            $table->string('kecamatan', 225);
            $table->string('kota', 225);
            $table->string('kodepos', 225);
            $table->string('no_telepon_rumah', 13)->nullable();
            $table->string('no_telepon_hp', 13)->nullable();
            $table->enum('status_tempat_tinggal', ['Milik Sendiri', 'Rumah Dinas', 'Milik Orang']);
            $table->date('menempati_alamat_tsb_sejak');
            $table->enum('pendidikan_terakhir', ['SMA', 'Akademi', 'Universitas']);
            $table->enum('status_perkawinan', ['Lajang', 'Menikah', 'Duda/Janda']);
            $table->string('nama_istri_suami', 225)->nullable();
            $table->string('jumlah_anak', 3)->nullable();
            $table->string('nama_ibu_kandung_pemohon', 225);
            $table->string('npwp_pribadi');
            $table->string('nama_ahli_waris', 225);
            $table->string('hubungan_ahli_waris', 225);
            $table->string('no_telp_ext_kantor', 225);
            $table->string('nik', 225);
            $table->string('nomor_rekening', 225);
            $table->string('bagian', 225);
            $table->date('tgl_masuk_keperusahaan');
            $table->enum('status_karyawan', ['Karyawan Tetap', 'Kontrak']);
            $table->string('foto', 225);
            $table->string('foto_ktp', 225);
            $table->string('ttd', 225);
            $table->string('id_card', 225);
            $table->string('tanggal_gabung', 225);
            $table->enum('status', ['Aktif', 'Tidak Aktif']);
            $table->date('tanggal_berhenti')->nullable();
            $table->date('tanggal_req_berhenti')->nullable();
            $table->string('sebab_berhenti', 225)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('anggota');
    }
};
