<?php

use App\Http\Controllers\dika\JurnalmasukController;
use Illuminate\Support\Facades\Route;
Route::prefix('dika')->group(function () {
    Route::get('jurnalmasuk', [JurnalmasukController::class, 'index'])->name('dika.jurnalmasuk');
    Route::get('routes', fn () => view('dika.routes'));
});