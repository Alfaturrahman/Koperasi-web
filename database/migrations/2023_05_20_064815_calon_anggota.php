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
        Schema::create('calon_anggota', function (Blueprint $table) {
            $table->string('nama_lengkap', 255);
            $table->string('nomor_ktp', 255)->primary();
            $table->string('masa_berlaku_ktp', 255);
            $table->string('tempat_lahir', 255);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('alamat_ktp', 255);
            $table->string('kelurahan_ktp', 255);
            $table->string('kecamatan_ktp', 255);
            $table->string('kota_ktp', 255);
            $table->string('kodepos_ktp', 5);
            $table->string('alamat', 255);
            $table->string('kelurahan', 255);
            $table->string('kecamatan', 255);
            $table->string('kota', 255);
            $table->string('kodepos', 5);
            $table->string('no_telepon_rumah', 13)->nullable();
            $table->string('no_telepon_hp', 13)->nullable();
            $table->enum('status_tempat_tinggal', ['Milik Sendiri', 'Rumah Dinas', 'Milik Orang Tua','Kontrak']);
            $table->date('menempati_alamat_tsb_sejak');
            $table->enum('pendidikan_terakhir', ['SMP', 'SMA', 'Akademi', 'Universitas']);
            $table->enum('status_perkawinan', ['Lajang', 'Menikah', 'Duda/Janda']);
            $table->string('nama_istri_suami', 255)->nullable();
            $table->string('jumlah_anak', 3)->nullable();
            $table->string('nama_ibu_kandung_pemohon', 255);
            $table->string('npwp_pribadi');
            $table->string('nama_ahli_waris', 255);
            $table->string('hubungan_ahli_waris', 255);
            $table->string('no_telp_ext_kantor', 255);
            $table->string('nik', 255);
            $table->string('nomor_rekening', 255);
            $table->string('bagian', 255);
            $table->date('tgl_masuk_keperusahaan');
            $table->enum('status_karyawan', ['Karyawan Tetap', 'Kontrak']);
            $table->string('foto', 255);
            $table->string('foto_ktp', 255);
            $table->string('ttd', 255);
            $table->string('id_card', 255);
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('calon_anggota');
    }
};
