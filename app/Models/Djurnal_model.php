<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//app/Http/Controlers/ControlerDjurnal.php

class Djurnal_model extends Model
{
    use HasFactory;
    protected $table ="t_djurnal";
    protected $primaryKey ="id";

    public function tampil_data(){
        $query = \DB::table('t_djurnal')->get();
        return $query;
    }
}
