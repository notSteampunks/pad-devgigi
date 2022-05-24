<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanGigi extends Model
{
    use HasFactory;

    protected $table = "pemeriksaan_gigi";
    
    protected $guarded = ['created_at', 'updated_at'];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }
}
