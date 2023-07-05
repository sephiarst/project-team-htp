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
        if (Schema::hasTable('t_dosen_pia')) {
            Schema::table('t_dosen', function (Blueprint $table) {
                $table->string('dosen_id')->primary();
                $table->string('nama_dosen', 50);
                $table->string('alamat', 100);
                $table->string('handphone', 15);
                $table->timestamps();
            });
        } else {
            Schema::create('t_dosen_pia', function (Blueprint $table) {
                $table->string('dosen_id')->primary();
                $table->string('nama_dosen', 50);
                $table->string('alamat', 100);
                $table->string('handphone', 25);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('t_prodi_pia')) {
            Schema::table('t_prodi_pia', function (Blueprint $table) {
                $table->string('prodi_id')->primary();
                $table->string('nama_prodi', 50);
                $table->string('pejabat', 100);
                $table->timestamps();
            });
        } else {
            Schema::create('t_prodi_pia', function (Blueprint $table) {
                $table->string('prodi_id')->primary();
                $table->string('nama_prodi', 50);
                $table->string('pejabat', 100);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('t_program_pia')) {
            Schema::table('t_program_pia', function (Blueprint $table) {
                $table->string('program_id')->primary();
                $table->string('nama_program', 50);
                $table->timestamps();
            });
        } else {
            Schema::create('t_program_pia', function (Blueprint $table) {
                $table->string('program_id')->primary();
                $table->string('nama_program', 50);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('t_ruang_pia')) {
            Schema::table('t_ruang_pia', function (Blueprint $table) {
                $table->string('ruang_id')->primary();
                $table->string('nama_ruang', 50);
                $table->string('kapasitas', 50);
                $table->timestamps();
            });
        } else {
            Schema::create('t_ruang_pia', function (Blueprint $table) {
                $table->string('ruang_id')->primary();
                $table->string('nama_ruang', 50);
                $table->string('kapasitas', 50);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('t_kelas_pia')) {
            Schema::table('t_kelas_pia', function (Blueprint $table) {
                $table->string('kelas_id')->primary();
                $table->string('nama_kelas', 50);
                $table->string('keterangan', 100);
                $table->timestamps();
            });
        } else {
            Schema::create('t_kelas_pia', function (Blueprint $table) {
                $table->string('kelas_id')->primary();
                $table->string('nama_kelas', 50);
                $table->string('keterangan', 100);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('t_kurikulum_pia')) {
            Schema::table('t_kurikulum_pia', function (Blueprint $table) {
                $table->string('kurikulum_id')->primary();
                $table->string('nama_kurikulum', 50);
                $table->timestamps();
            });
        } else {
            Schema::create('t_kurikulum_pia', function (Blueprint $table) {
                $table->string('kurikulum_id')->primary();
                $table->string('nama_kurikulum', 50);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('t_tahun_pia')) {
            Schema::table('t_tahun_pia', function (Blueprint $table) {
                $table->string('tahun_id')->primary();
                $table->string('nama_tahun', 50);
                $table->timestamps();
            });
        } else {
            Schema::create('t_tahun_pia', function (Blueprint $table) {
                $table->string('tahun_id')->primary();
                $table->string('nama_tahun', 50);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('t_hari_pia')) {
            Schema::table('t_hari_pia', function (Blueprint $table) {
                $table->string('hari_id')->primary();
                $table->string('nama_hari', 50);
                $table->timestamps();
            });
        } else {
            Schema::create('t_hari_pia', function (Blueprint $table) {
                $table->string('hari_id')->primary();
                $table->string('nama_hari', 50);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('t_mahasiswa_pia')) {
            Schema::table('t_mahasiswa_pia', function (Blueprint $table) {
                $table->string('nim')->primary();
                $table->string('nama_mahasiswa', 50);
                $table->string('alamat', 100);
                $table->string('prodi_id');
                $table->foreign('prodi_id')->references('prodi_id')->on('t_prodi_pia');
                $table->string('program_id');
                $table->foreign('program_id')->references('program_id')->on('t_program_pia');
                $table->timestamps();
            });
        } else {
            Schema::create('t_mahasiswa_pia', function (Blueprint $table) {
                $table->string('nim')->primary();
                $table->string('nama_mahasiswa', 50);
                $table->string('alamat', 100);
                $table->string('prodi_id');
                $table->foreign('prodi_id')->references('prodi_id')->on('t_prodi_pia');
                $table->string('program_id');
                $table->foreign('program_id')->references('program_id')->on('t_program_pia');
                $table->timestamps();
            });
        }

        if (Schema::hasTable('t_matakuliah_pia')) {
            Schema::table('t_matakuliah_pia', function (Blueprint $table) {
                $table->string('mkid')->primary();
                $table->string('nama_mk', 50);
                $table->integer('sks');
                $table->string('semester', 2);
                $table->string('kurikulum_id');
                $table->foreign('kurikulum_id')->references('kurikulum_id')->on('t_kurikulum_pia');
                $table->timestamps();
            });
        } else {
            Schema::create('t_matakuliah_pia', function (Blueprint $table) {
                $table->string('mkid')->primary();
                $table->string('nama_mk', 50);
                $table->integer('sks');
                $table->string('semester', 2);
                $table->string('kurikulum_id');
                $table->foreign('kurikulum_id')->references('kurikulum_id')->on('t_kurikulum_pia');
                $table->timestamps();
            });
        }

        if (Schema::hasTable('t_jadwal_pia')) {
            Schema::table('t_jadwal_pia', function (Blueprint $table) {
                $table->string('jadwal_id')->primary();
                $table->string('mkid');
                $table->string('tahun_id');
                $table->string('prodi_id');
                $table->string('kelas_id');
                $table->string('ruang_id');
                $table->string('dosen_id');
                $table->string('hari_id');
                $table->foreign('mkid')->references('mkid')->on('t_matakuliah_pia');
                $table->foreign('tahun_id')->references('tahun_id')->on('t_tahun_pia');
                $table->foreign('prodi_id')->references('prodi_id')->on('t_prodi_pia');
                $table->foreign('kelas_id')->references('kelas_id')->on('t_kelas_pia');
                $table->foreign('ruang_id')->references('ruang_id')->on('t_ruang_pia');
                $table->foreign('dosen_id')->references('dosen_id')->on('t_dosen_pia');
                $table->foreign('hari_id')->references('hari_id')->on('t_hari_pia');
                $table->time('jam_mulai');
                $table->time('jam_selesai');
                $table->timestamps();
            });
        } else {
            Schema::create('t_jadwal_pia', function (Blueprint $table) {
                $table->string('jadwal_id')->primary();
                $table->string('mkid');
                $table->string('tahun_id');
                $table->string('prodi_id');
                $table->string('kelas_id');
                $table->string('ruang_id');
                $table->string('dosen_id');
                $table->string('hari_id');
                $table->foreign('mkid')->references('mkid')->on('t_matakuliah_pia');
                $table->foreign('tahun_id')->references('tahun_id')->on('t_tahun_pia');
                $table->foreign('prodi_id')->references('prodi_id')->on('t_prodi_pia');
                $table->foreign('kelas_id')->references('kelas_id')->on('t_kelas_pia');
                $table->foreign('ruang_id')->references('ruang_id')->on('t_ruang_pia');
                $table->foreign('dosen_id')->references('dosen_id')->on('t_dosen_pia');
                $table->foreign('hari_id')->references('hari_id')->on('t_hari_pia');
                $table->time('jam_mulai');
                $table->time('jam_selesai');
                $table->timestamps();
            });
        }

        if (Schema::hasTable('t_krs_pia')) {
            Schema::table('t_krs_pia', function (Blueprint $table) {
                $table->string('krs_id')->primary();
                $table->string('tahun_id');
                $table->string('nim');
                $table->foreign('tahun_id')->references('tahun_id')->on('t_tahun_pia');
                $table->foreign('nim')->references('nim')->on('t_mahasiswa_pia');
                $table->string('tugas');
                $table->string('kehadiran');
                $table->string('uts');
                $table->string('uas');
                $table->string('nilai_angka');
                $table->string('nilai_huruf');
                $table->timestamps();
            });
        } else {
            Schema::create('t_krs_pia', function (Blueprint $table) {
                $table->string('krs_id')->primary();
                $table->string('tahun_id');
                $table->string('nim');
                $table->foreign('tahun_id')->references('tahun_id')->on('t_tahun_pia');
                $table->foreign('nim')->references('nim')->on('t_mahasiswa_pia');
                $table->string('tugas');
                $table->string('kehadiran');
                $table->string('uts');
                $table->string('uas');
                $table->string('nilai_angka');
                $table->string('nilai_huruf');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Schema::dropIfExists('t_dosen_pia');
            Schema::dropIfExists('t_prodi_pia');
            Schema::dropIfExists('t_program_pia');
            Schema::dropIfExists('t_ruang_pia');
            Schema::dropIfExists('t_kelas_pia');
            Schema::dropIfExists('t_kurikulum_pia');
            Schema::dropIfExists('t_tahun_pia');
            Schema::dropIfExists('t_hari_pia');
            Schema::dropIfExists('t_mahasiswa_pia');
            Schema::dropIfExists('t_matakuliah_pia');
            Schema::dropIfExists('t_jadwal_pia');
            Schema::dropIfExists('t_krs_pia');
        });
    }
};
