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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('tunggakan_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('id_petugas');
            // $table->string('nisn');
            $table->string('tgl_bayar');
            $table->string('bulan_dibayar');
            // $table->string('tahun_dibayar');
            $table->integer('id_spp');
            $table->string('bulan');
            $table->integer('total');
            $table->integer('jumlah_bayar');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
