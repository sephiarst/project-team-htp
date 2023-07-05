<?php

namespace App\Http\Controllers\SephiaRst;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HariController extends Controller
{
    public function index(): View
    {
        $dosen = Dosen::select([
            'dosen_id',
            'nama_dosen',
            'alamat',
            'handphone'
        ])->get();

        return view('Sephiarst.Dosen.index', compact('dosen'));
    }
}
