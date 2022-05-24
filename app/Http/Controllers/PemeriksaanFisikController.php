<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemeriksaanFisik;
use App\Models\PemeriksaanMata;
use App\Models\PemeriksaanTelinga;
use App\Models\User;
use App\Models\Orangtua;
use App\Models\Anak;
use Auth;

class PemeriksaanFisikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $orangtua = Orangtua::Where('id_users', Auth::user()->id)->value('id');
        $anak = Anak::Where('id_orangtua',$orangtua)->get();

        return view('orangtua.pemeriksaan.create',compact('anak'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $orangtua = Orangtua::Where('id_users', Auth::user()->id)->value('id');
        $anak = Anak::Where('id_orangtua',$orangtua)->get();

        

        $pFisik = new PemeriksaanFisik();
        $pFisik->id_anak =  $request->anak;
        $pFisik->tinggi_badan = $request->tinggi_badan;
        $pFisik->berat_badan = $request->berat_badan;
        if($request->tinggi_badan > 0 && $request->berat_badan > 0){
            $pFisik->imt = $request->berat_badan/((($request->tinggi_badan)/100)*(($request->tinggi_badan)/100));
        }
        $pFisik->sistole = $request->sistole;
        $pFisik->diastole = $request->diastole;
        $pFisik->save();
        $pMata = new PemeriksaanMata();
        $pMata->id_anak =  $request->anak;
        $pMata->soal1=$request->soal1;
        $pMata->soal2=$request->soal2;
        $pMata->soal3=$request->soal3;
        $pMata->soal4=$request->soal4;
        $pMata->soal5=$request->soal5;
        $pMata->soal6=$request->soal6;
        $pMata->save();
        $pTelinga = new PemeriksaanTelinga();
        $pTelinga->id_anak =  $request->anak;
        $pTelinga->soal1=$request->soal1;
        $pTelinga->soal2=$request->soal2;
        $pTelinga->soal3=$request->soal3;
        $pTelinga->soal4=$request->soal4;
        $pTelinga->soal5=$request->soal5;
        $pTelinga->soal6=$request->soal6;
        $pTelinga->soal7=$request->soal7;
        $pTelinga->save();


        return redirect()->route('viewDashboard.orangtua');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function riwayat(){
        $user = Auth::user();
        $orangtua = Orangtua::Where('id_users', Auth::user()->id)->value('id');
        $anak = Anak::Where('id_orangtua',$orangtua)->get();
        return view('orangtua.pemeriksaan.riwayat',compact('anak'));
    }
    public function riwayatfisik(Request $request){
        
        $user = Auth::user();
        $orangtua = Orangtua::Where('id_users', Auth::user()->id)->value('id');
        $anak = Anak::Where('id_orangtua',$orangtua)->get();
        if(!empty($request->anak)){
        $pemeriksaanFisik = PemeriksaanFisik::Where('id_anak',$request->anak)->get();
       }else{
        $pemeriksaanFisik = PemeriksaanFisik::all();
        }
        return datatables()->of($pemeriksaanFisik)
        ->addColumn('imt', function($pemeriksaanFisik){
            if($pemeriksaanFisik->imt < 18.5){
                $data= 'Kurus';
            }else if($pemeriksaanFisik->imt >= 18.5 && $pemeriksaanFisik->imt <= 24.9){
                $data = 'Ideal';
            }else if($pemeriksaanFisik->imt >= 25 && $pemeriksaanFisik->imt <= 29.9){
                $data = 'Gemuk';
            }else{
                $data = 'Obesitas';
            }
            return $data;
        })
        ->addColumn('tanggal', function($pemeriksaanFisik){
            return $tanggal = date('d-m-Y', strtotime($pemeriksaanFisik->created_at));
        })
        ->addColumn('jam', function($pemeriksaanFisik){
            return $jam = date('H:i', strtotime($pemeriksaanFisik->created_at));
        })
       ->addIndexColumn()
       ->make(true);
       
    }

    public function riwayatmata(Request $request){
        $user = Auth::user();
        $orangtua = Orangtua::Where('id_users', Auth::user()->id)->value('id');
        $anak = Anak::Where('id_orangtua',$orangtua)->get();
        if(!empty($request->anak)){
            $pemeriksaanMata = PemeriksaanMata::Where('id_anak',$request->anak)->get();
           }else{
            $pemeriksaanMata = PemeriksaanMata::all();
            }
            return datatables()->of($pemeriksaanMata)
            ->addColumn('tanggal', function($pemeriksaanMata){
               return $tanggal = date('d-m-Y', strtotime($pemeriksaanMata->created_at));
                
            })
            ->addColumn('jam',function($pemeriksaanMata){
                return $jam = date('H:i', strtotime($pemeriksaanMata->created_at));
            })
            ->addIndexColumn()
            ->make(true);
    }
    public function riwayattelinga(Request $request){
        $user = Auth::user();
        $orangtua = Orangtua::Where('id_users', Auth::user()->id)->value('id');
        $anak = Anak::Where('id_orangtua',$orangtua)->get();
        if(!empty($request->anak)){
            $pemeriksaanTelinga = PemeriksaanTelinga::Where('id_anak',$request->anak)->get();
           }else{
            $pemeriksaanTelinga = PemeriksaanTelinga::all();
            }
            return datatables()->of($pemeriksaanTelinga)
            ->addColumn('tanggal', function($pemeriksaanTelinga){
               return $tanggal = date('d-m-Y', strtotime($pemeriksaanTelinga->created_at));
                
            })
            ->addColumn('jam',function($pemeriksaanTelinga){
                return $jam = date('H:i', strtotime($pemeriksaanTelinga->created_at));
            })
            ->addIndexColumn()
            ->make(true);
    }
    public function riwayatgigi(){
        $user = Auth::user();
        $orangtua = Orangtua::Where('id_users', Auth::user()->id)->value('id');
        $anak = Anak::Where('id_orangtua',$orangtua)->get();
        $pemeriksaanGigi = PemeriksaanGigi::Where('id_anak',$anak)->get();
        return view('orangtua.pemeriksaan.riwayatgigi',compact('anak','pemeriksaanGigi'));
    }
}
