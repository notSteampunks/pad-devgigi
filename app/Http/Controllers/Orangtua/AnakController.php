<?php

namespace App\Http\Controllers\Orangtua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anak;
use Auth;
use App\Models\Orangtua;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orangtua.anak.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('orangtua.anak.create');
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

        $anak->id_orangtua= $orangtua;
        $anak->nama = $request->nama;
        $anak->tanggal_lahir = $request->tanggal_lahir;
        $anak->sekolah = $request->sekolah;
        $anak->kelas = $request->kelas;
        $anak->bb = $request->bb;
        $anak->tb = $request->tb;

        $anak->save();
        return redirect()->route('orangtua.anak.index');
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
        $anak = Anak::find($id);
        return view('orangtua.anak.edit');
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

        $user = Auth::user();
        $orangtua = Orangtua::Where('id_users', Auth::user()->id)->value('id');

        $anak = Anak::find($id);

        $anak->id_orangtua=$orangtua;
        $anak->nama = $request->nama;
        $anak->tanggal_lahir = $request->tanggal_lahir;
        $anak->sekolah = $request->sekolah;
        $anak->kelas = $request->kelas;
        $anak->bb = $request->bb;
        $anak->tb = $request->tb;

        $anak->save();
        return redirect()->route('orangtua.anak.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anak= Anak::find($id);
        $anak->delete();
        return response()->json(['data'=>'success delete data']);
    }
}
