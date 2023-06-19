<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akuntansitransaksi_model;

class akuntansitransaksiController extends Controller
{
    //
    public function index(){
        $myakuntansitransaksi = new Akuntansitransaksi_model();
        $akuntansitransaksi = $myakuntansitransaksi->tampil_akuntansitransaksi();
        
        $data = array('akuntansitransaksi' => $akuntansitransaksi);
        return view('akuntansitransaksi/index', $data);
    }
}
