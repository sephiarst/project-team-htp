<?php

namespace App\Models\dika;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurnalmasuk extends Model
{
    use HasFactory;

    protected $table = 'dikatabel_akuntansi_jurnal_masuk';
    protected $primaryKey = 'nomor_jurnal';
    protected $keyType = 'integer';
}
