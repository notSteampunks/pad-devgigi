<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orangtua extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'orangtua';
    protected $guarded = ['created_at', 'updated_at'];
    protected $fillable=[
        'id_users',
        'id_kecamatan',
        'id_kelurahan',
        'nama',
        'alamat',
        'pendidikan',
    ];


    public function user(){
        return $this->belongsTo('App\Models\User', 'id_users');
    }
    public function kecamatan(){
        return $this->belongsTo('App\Models\Kecamatan', 'id_kecamatan');
    }
    public function kelurahan(){
        return $this->belongsTo('App\Models\Kelurahan', 'id_kelurahan');
    }
}
