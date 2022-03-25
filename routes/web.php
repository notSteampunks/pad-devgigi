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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::resources([
  'login' => App\Http\Controllers\Auth\LoginController::class
  ]);

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('ukgs', function () {
    return view('dokter.ukgs');
});
Route::get('ukgs/action', function () {
  return view('dokter.action');
});

// Route::post('/dokter',[DokterController::class,'store']);


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
      });
    });

Route::group(['prefix' => 'admin/table'], function () {
    Route::get('/data-dokter',[DokterController::class, 'data'])->name('dokter.table');
    Route::get('/data-orangtua',[OrangtuaController::class, 'data'])->name('orangtua.table');
    Route::get('/data-anak',[AnakController::class, 'data'])->name('anak.table');
    Route::get('/data-kecamatan',[KecamatanController::class, 'data'])->name('kecamatan.table');
    Route::get('/data-kelurahan',[KelurahanController::class, 'data'])->name('kelurahan.table');
    Route::get('/data-sekolah',[SekolahController::class, 'data'])->name('sekolah.table');
    
    
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

    Route::get('/list-kelurahan/{id_kecamatan}', [KelurahanController::class, 'listDesa'])->name('list-kelurahan');