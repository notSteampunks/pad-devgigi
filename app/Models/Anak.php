<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anak extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'anak';
    protected $guarded = ['created_at', 'updated_at'];
    protected $fillable=[
        'id_orangtua',
        'nama',
        'tanggal_lahir',
        'id_sekolah',
        'kelas',
        'bb',
        'tb',
    ];

    public function orangtua(){
        return $this->belongsTo('App\Models\Orangtua', 'id_orangtua');
    }
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah', 'id_sekolah');
    }
}
    

