<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Djurnal_model;

class ControllerDjurnal extends Controller
{
    //  
    public function index(){
        $mydjurnal = new djurnal_model();
        $djurnal = $mydjurnal->tampil_data();
        
        $data = array('djurnal' => $djurnal);
        return view('djurnal/index', $data);
    }
}

    
    

