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
        Schema::create('abari_djurnal', function (Blueprint $table) {
            $table->integer('TransaksiID', 10);
            $table->string('jurnalKode', 15);
            $table->string('NomorPerkiraan', 10);
            $table->string('TanggalTransaksi', 12);
            $table->string('BulanTransaksi', 20);
            $table->string('jenis_transaksi', 15);
            $table->text('Keterangan');
            $table->bigInteger('debet', 19);
            $table->bigInteger('kredit', 19);
            $table->string('tanggal_potong', 12);
            $table->string('keterangan_potong', 10);
            $table->string('id_user', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abari_djurnal');
    }
};
