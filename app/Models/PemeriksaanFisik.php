<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class PemeriksaanFisik extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table= "pemeriksaan_fisik";
    protected $guarded = ['created_at', 'updated_at'];

    public function anak(){
        return $this->belongsTo('App\Models\Anak', 'id_anak');
    }

}
