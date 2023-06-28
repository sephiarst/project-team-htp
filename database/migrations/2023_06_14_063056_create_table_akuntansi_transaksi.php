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
        Schema::create('tbl_akuntansi_transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('kode_jurnal', '15');
            $table->string('nomor_perkiraan', '15');
            $table->date('tanggal_transaksi', '15');
            $table->string('bulan_transaksi', '15');
            $table->string('jenis_transaksi', '15');
            $table->string('keterangan_transaksi', '35');
            $table->string('debet', '45');
            $table->string('kredit', '45');
            $table->date('tanggal_posting', '45');
            $table->date('keterangan_posting', '45');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_akuntansi_transaksi');
    }
};
