<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\induk_user;

class ControllerIndukUser extends Controller
{
    public function index(){
        $myindukuser = new induk_user();
        $indukuser = $myindukuser->tampil_indukuser();
        
        $data = array('indukuser' => $indukuser);
        return view('indukuser/index', $data);
    }

}