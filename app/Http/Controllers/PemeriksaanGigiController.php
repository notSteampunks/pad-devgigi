<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanGigi;
use Illuminate\Http\Request;
use File;
use Auth;
use App\Models\User;
use App\Models\Orangtua;
use App\Models\Anak;
use Illuminate\Support\Facades\Storage;

class PemeriksaanGigiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return view('orangtua.pemeriksaan.pemeriksaanGigi',compact('anak'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pgigi = new PemeriksaanGigi();
        $pgigi->id_anak = $request->anak;
        if(!empty($request->gambar1)){
             $file = $request->file('gambar1');
             $extension = strtolower($file->getClientOriginalExtension());
             $filename1 = uniqid() . '.' . $extension;
            
            Storage::put('public/gigi/' . $filename1, File::get($file));
            $pgigi->gambar1=$filename1;
        }
        if(!empty($request->gambar2)){
            $file = $request->file('gambar2');
            $extension = strtolower($file->getClientOriginalExtension());
            $filename2 = uniqid() . '.' . $extension;
           
           Storage::put('public/gigi/' . $filename2, File::get($file));
           $pgigi->gambar2=$filename2;
       }
       if(!empty($request->gambar3)){
        $file = $request->file('gambar3');
        $extension = strtolower($file->getClientOriginalExtension());
        $filename3 = uniqid() . '.' . $extension;
       
       Storage::put('public/gigi/' . $filename3, File::get($file));
       $pgigi->gambar3=$filename3;
        }
        if(!empty($request->gambar4)){
            $file = $request->file('gambar4');
            $extension = strtolower($file->getClientOriginalExtension());
            $filename4 = uniqid() . '.' . $extension;
           
           Storage::put('public/gigi/' . $filename4, File::get($file));
           $pgigi->gambar4=$filename4;
        }
        if(!empty($request->gambar5)){
            $file = $request->file('gambar5');
            $extension = strtolower($file->getClientOriginalExtension());
            $filename5 = uniqid() . '.' . $extension;
           
           Storage::put('public/gigi/' . $filename5, File::get($file));
           $pgigi->gambar5=$filename5;
        }
        
        $pgigi->soal1= $request->soal1;
        $pgigi->soal2= $request->soal2;
        
        $pgigi->save();
        return redirect()->route('viewDashboard.orangtua');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PemeriksaanGigi  $pemeriksaanGigi
     * @return \Illuminate\Http\Response
     */
    public function show(PemeriksaanGigi $pemeriksaanGigi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PemeriksaanGigi  $pemeriksaanGigi
     * @return \Illuminate\Http\Response
     */
    public function edit(PemeriksaanGigi $pemeriksaanGigi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PemeriksaanGigi  $pemeriksaanGigi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PemeriksaanGigi $pemeriksaanGigi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PemeriksaanGigi  $pemeriksaanGigi
     * @return \Illuminate\Http\Response
     */
    public function destroy(PemeriksaanGigi $pemeriksaanGigi)
    {
        //
    }
}
