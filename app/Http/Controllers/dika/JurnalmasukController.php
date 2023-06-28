<?php

namespace App\Http\Controllers\dika;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\dika\jurnalmasuk;

class JurnalmasukController extends Controller
{
    public function index()
    {
        $jurnalmasuk = jurnalmasuk::select([
            'nomor_jurnal',
            'kode_jurnal',
            'tanggal_selesai'
        ])->get();
        return view('dika.jurnalmasuk.index', compact('jurnalmasuk'));
    }
}