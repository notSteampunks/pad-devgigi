<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Sekolah extends Model
{
    use HasFactory;
    
    protected $table = 'sekolah';
    protected $guarded = ['created_at', 'updated_at'];
    protected $fillable=[
        'id_kecamatan',
        'id_kelurahan',
        'nama',
        'alamat',
    ];

    public function kecamatan(){
        return $this->belongsTo('App\Models\Kecamatan', 'id_kecamatan');
    }
    public function kelurahan(){
        return $this->belongsTo('App\Models\Kelurahan', 'id_kelurahan');
    }
}
