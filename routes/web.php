<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\OrangtuaController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\PemeriksaanFisikController;
use App\Http\Controllers\PemeriksaanGigiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'guest'], function () {
Route::get('/', function () {
    return view('auth.login');
});
});
Auth::routes();

Route::get('/list-desa/{id_kecamatan}', [App\Http\Controllers\KelurahanController::class, 'listDesa'])
    ->name('list-desa');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::get('/list-sekolah/{id_kelurahan}', [App\Http\Controllers\SekolahController::class, 'listSekolah'])
    ->name('list-sekolah');
    Route::get('/list-posyandu/{id_kelurahan}', [App\Http\Controllers\SekolahController::class, 'listPosyandu'])
    ->name('list-posyandu');
// Route::post('/dokter',[DokterController::class,'store']);
Route::get('/home',function(){
    return view('home');
})->name('home');

Route::group(['prefix' => 'admin'], function () {
  Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    Route::resource('dokter', DokterController::class)->except('destroy');
    Route::resource('orangtua', OrangtuaController::class)->except('destroy');
    Route::resource('anak', AnakController::class)->except('destroy');
    Route::resource('kecamatan', KecamatanController::class)->except('destroy');
    Route::resource('kelurahan', KelurahanController::class)->except('destroy');
    Route::resource('sekolah', SekolahController::class)->except('destroy');
    Route::get('/dashboard',function(){return view('admin.dashboard.dashboard');
    });
  });
});
Route::post('/daftarUser', [App\Http\Controllers\Auth\RegisterController::class, 'storeOrangtua'])
    ->name('storeOrangtua');

Route::post('/register-user',[OrangtuaController::class, 'registerUser'])->name('registeruser');
  
Route::group(['prefix' => 'orangtua'], function () {
  Route::group(['middleware' => ['auth','ceklevel:orangtua']], function () {
    Route::resource('pemeriksaanfisik', PemeriksaanFisikController::class)->except('destroy');
    Route::get('/dashboard',[OrangtuaController::class,'viewDashboard'])->name('viewDashboard.orangtua');
    Route::get('/anak',[OrangtuaController::class,'viewAnak'])->name('viewanak');
    Route::get('/anak/create',[OrangtuaController::class,'viewTambahAnak'])->name('view-anak.create');
    Route::post('/anak/store',[OrangtuaController::class,'tambahAnak'])->name('tambahanak.store');
    Route::resource('pemeriksaangigi', PemeriksaanGigiController::class)->except('destroy');
    Route::get('/pemeriksaan/riwayat',[PemeriksaanFisikController::class,'riwayat'])->name('view-riwayat');
    });
  });

Route::group(['prefix' => 'admin/table'], function () {
    Route::get('/data-dokter',[DokterController::class, 'data'])->name('dokter.table');
    Route::get('/data-orangtua',[OrangtuaController::class, 'data'])->name('orangtua.table');
    Route::get('/data-anak',[AnakController::class, 'data'])->name('anak.table');
    Route::get('/data-kecamatan',[KecamatanController::class, 'data'])->name('kecamatan.table');
    Route::get('/data-kelurahan',[KelurahanController::class, 'data'])->name('kelurahan.table');
    Route::get('/data-sekolah',[SekolahController::class, 'data'])->name('sekolah.table');
    Route::get('/data-pemeriksaan-fisik',[PemeriksaanFisikController::class,'riwayatfisik'])->name('riwayat-fisik');
    Route::get('/data-pemeriksaan-mata',[PemeriksaanFisikController::class,'riwayatmata'])->name('riwayat-mata');
    Route::get('/data-pemeriksaan-telinga',[PemeriksaanFisikController::class,'riwayattelinga'])->name('riwayat-telinga');
    
    });
Route::group(['prefix' => 'orangtua/table'], function () {
  
  Route::get('/data-anak',[OrangtuaController::class, 'dataAnak'])->name('anak-orangtua.table');
  
  
  });

Route::group(['prefix' => 'delete'], function () {
  Route::get('dokter/{id}', [DokterController::class, 'destroy'])->name('dokter.destroy');
  Route::get('orangtua/{id}', [OrangtuaController::class, 'destroy'])->name('orangtua.destroy');
  Route::get('kecamatan/{id}', [KecamatanController::class, 'destroy'])->name('kecamatan.destroy');
  Route::get('sekolah/{id}', [SekolahController::class, 'destroy'])->name('sekolah.destroy');

});

Route::group(['prefix' => 'dokter'], function () {
  Route::group(['middleware' => ['auth','ceklevel:dokter']], function () {
    Route::get('/dashboard',[DokterController::class,'viewDashboard'])->name('dokter.dashboard');
    Route::get('/profil',[DokterController::class, 'profil'])->name('dokter.profil');
    Route::post('/profil/edit/{id}',[DokterController::class, 'profil_edit'])->name('dokter.profilEdit');
    Route::post('/profil/{id}',[DokterController::class, 'profil_update'])->name('dokter.profilUpdate');
    Route::get('/pemeriksaan-ukgs',[DokterController::class, 'pemeriksaan_ukgs'])->name('dokter.periksaUKGS');
    Route::get('/pemeriksaan-ukgm',[DokterController::class, 'pemeriksaan_ukgm'])->name('dokter.periksaUKGM');
    Route::get('/pemeriksaan-ukgs/pemeriksaan-data',[DokterController::class, 'pemeriksaan_data_ukgs'])->name('dokter.pemeriksaanDataUKGS');
    Route::get('/pemeriksaan-ukgm/pemeriksaan-data',[DokterController::class, 'pemeriksaan_data_ukgm'])->name('dokter.pemeriksaanDataUKGM');
    Route::get('/rekap-ukgs',[DokterController::class, 'rekap_ukgs'])->name('dokter.rekapDataUKGS');
    Route::get('/rekap-ukgm',[DokterController::class, 'rekap_ukgm'])->name('dokter.rekapDataUKGM');
    Route::get('/rekap-ukgs/rekap-datail-ukgs',[DokterController::class, 'rekap_detail_ukgs'])->name('dokter.rekapDetailUKGS');
    Route::get('/rekap-ukgm/rekap-data-ukgm',[DokterController::class, 'rekap_detail_ukgm'])->name('dokter.rekapDetailUKGM');
    });
  });



