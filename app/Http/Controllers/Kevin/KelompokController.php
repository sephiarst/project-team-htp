<?php

namespace App\Http\Controllers\kevin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\kevin\Kelompok_model;

class KelompokController extends Controller
{
    public function index()
    {
        // return ('ABC');
        $mykelompok = new Kelompok_model();
        $kelompok = $mykelompok->tampil_kelompok();
        //dd($jadwal);

        $data = array('kelompok' => $kelompok);
        return view('kelompok/index', $data);
    }
}