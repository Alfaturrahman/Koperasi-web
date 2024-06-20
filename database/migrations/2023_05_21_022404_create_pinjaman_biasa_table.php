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
        Schema::create('pinjaman_biasa', function (Blueprint $table) {
            $table->id();
            $table->string('no_anggota')->unique;
            $table->string('nama');
            $table->string('bagian');
            $table->string('alamat');
            $table->string('no_telp');
            $table->enum('pekerjaan',['dosen','staff']);
            $table->string('besar_pinjaman');
            $table->string('besar_angsuran');
            $table->string('tanggal_permohonan');
            $table->string('nomor_rekening');
            $table->string('email');
            $table->string('total_pinjaman');
            $table->string('alasan_pinjaman');
            $table->enum('status', ['terima', 'tolak', 'sedang menunggu validasi pengawas','sedang menunggu validasi bendahara','sedang menunggu validasi ketua'])->default('sedang menunggu validasi pengawas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjaman_biasas');
    }
};
