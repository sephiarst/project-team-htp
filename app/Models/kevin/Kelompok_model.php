<?php

namespace App\Models\kevin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok_model extends Model
{
    use HasFactory;
    protected $table ="t_kelompok";
    protected $primaryKey ="id_kelompok";

    public function tampil_kelompok(){
        $query = \DB::table('t_kelompok')->get();
        return $query;
    }
}