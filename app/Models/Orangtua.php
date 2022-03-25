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
        'nama',
        'alamat',
        'pendidikan',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User', 'id_users');
    }
}
