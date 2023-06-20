<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//app/Http/Controllers/ControllerSupplier.php

class supplier_model extends Model
{
    use HasFactory;
    protected $table ="t_supplier";
    protected $primaryKey ="id";

    public function tampil_supplier(){
        $query = \DB::table('t_supplier')->get();
        return $query;
    }
}
