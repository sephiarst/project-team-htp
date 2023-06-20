<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class induk_user extends Model
{
    use HasFactory;
   
    protected $table ="t_induk_user";
    protected $primaryKey ="id";

    public function tampil_indukuser(){
        $query = \DB::table('t_induk_user')->get();
        return $query;
    }
}
