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
        Schema::create('t_induk_user', function (Blueprint $table) {
            $table->id();
            $table->string('username', '15');
            $table->string('password', '15');
            $table->date('nama_lengkap', '15');
            $table->string('asal_kantor', '15');
          
            $table->timestamps();
        
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_induk_user');
    }
};
