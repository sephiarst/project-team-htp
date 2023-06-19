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
        Schema::create('abari_tabel_akuntansi_master', function (Blueprint $table) {
            $table->integer('id_perkiraan', 10);
            $table->string('nomor_perkiraan', 6);
            $table->string('nama_perkiraan', 30);
            $table->string('tipe', 7);
            $table->string('induk', 5);
            $table->integer('level', 10);
            $table->string('kelompok', 10);
            $table->string('normal', 10);
            $table->bigInteger('awal_debet', 19);
            $table->bigInteger('awal_kredit', 19);
            $table->bigInteger('mut_debet', 19);
            $table->bigInteger('mut_kredit', 19);
            $table->bigInteger('sisa_debet', 19);
            $table->bigInteger('sisa_kredit', 19);
            $table->bigInteger('rl_debet', 19);
            $table->bigInteger('rl_kredit', 19);
            $table->bigInteger('nrc_debet', 19);
            $table->bigInteger('nrc_kredit', 19);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abari_tabel_akuntansi_master');
    }
};
