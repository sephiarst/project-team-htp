<?php

use App\Http\Controllers\Sephiarst\JadwalController;
use App\Http\Controllers\Sephiarst\MatakuliahController;
use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | sephiarst Routes
    |--------------------------------------------------------------------------
    |
    | Custom routes yang dibuat untuk prefix sephiarst
    |
 */

Route::prefix('sephiarst')->group(function () {
    Route::get('matakuliah', [MatakuliahController::class, 'index'])->name('sephiarst.matakuliah');
    Route::get('jadwal', [JadwalController::class, 'index'])->name('sephiarst.jadwal');
    Route::get('routes', fn () => view('sephiarst.routes'));
});
