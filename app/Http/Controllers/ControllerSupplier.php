<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier_model;

class ControllerSupplier extends Controller
{
    //
    public function index(){
        // return ('ABC');
        $mysupplier = new supplier_model();
        $supplier   = $mysupplier->tampil_supplier();
        //dd($jadwal);

        $data = array('supplier' => $supplier);
        return view('supplier/index', $data);
    }
}
