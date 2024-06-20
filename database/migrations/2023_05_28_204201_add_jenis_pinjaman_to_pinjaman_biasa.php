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
        Schema::table('pinjaman_biasa', function (Blueprint $table) {
            $table->enum('jenis_pinjaman',['Pinjaman Biasa','Pinjaman Khusus','Pinjaman Urgent']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pinjaman_biasa', function (Blueprint $table) {
            //
        });
    }
};