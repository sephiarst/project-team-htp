<?php

namespace App\Models\Sephiarst;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = 't_matakuliah_pia';

    protected $primaryKey = 'mkid';
    public $incrementing = false;
    protected $keyType = 'string';

    public function jadwal(): HasMany
    {
        return $this->hasMany(Jadwal::class);
    }

    public function kurikulum(): BelongsTo
    {
        return $this->belongsTo(Kurikulum::class, 'kurikulum_id');
    }
}
