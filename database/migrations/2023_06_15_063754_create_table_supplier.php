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
        Schema::create('t_supplier', function (Blueprint $table) {
            
            $table->string('supplier_id')->primary();
                $table->string('nama_supplier', 50);
                $table->string('alamat_supplier', 100);
                $table->string('handphone_supplier', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_supplier');
    }
};
