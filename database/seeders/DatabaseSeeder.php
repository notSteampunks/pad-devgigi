<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Dokter;
use App\Models\Orangtua;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'email'     => 'admin@admin.com',
            'password'  =>  bcrypt('admin1234'),
            
        ]);
        $dokter = User::create([
            'email'     => 'dokter@dokter.com',
            'password'  =>  bcrypt('dokter1234'),
            'role'      => 'dokter',
            
        ]);
        $ortu = User::create([
            'email'     => 'ortu@ortu.com',
            'password'  =>  bcrypt('ortu1234'),
            'role'      => 'orangtua',
            
        ]);
        $kecamatan = Kecamatan::create([
            'nama'     => 'Tambun',
            
        ]);
        $kelurahan = Kelurahan::create([
            'nama'     => 'Mekarsari',
            'id_kecamatan' => 1,
            
        ]);
        $dokter = Dokter::create([
            'id_users'  => 2,
            'nik'       => '123456',
            'nama' => 'Indira',
            'id_kecamatan' => 1,
            'jenis_kelamin' => 'Perempuan',
            'tempat_lahir'  => 'Bekasi',
            'tanggal_lahir' => '2000-01-01',
            'no_telp'   => '088210968646',
            'no_str'    => '654321',
            
        ]);


    }
}
