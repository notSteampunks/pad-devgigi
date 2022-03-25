<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anak;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function data(){
        $anak = Anak::all();
        return datatables()->of($anak)
        ->addColumn('action', function($row){
            $btn = '<div class="btn-group btn-group-sm">';
            $btn .= '<a href="'.route('anak.edit',$row->id).'" class="btn btn-warning btn-icon"><i class="lni lni-pencil-alt "></i></a>';
            $btn .= '<button title="Delete" id="btn-delete" class="delete-modal btn btn-danger btn-icon"><i class="lni lni-trash"></i></button>';
            
            $btn .= '</div>';
            return $btn;
        })
        ->addColumn('orangtua',function($row){
            return $row->orangtua->nama;
        })
        ->rawColumns(['action'])->addIndexColumn()->make(true);
    }

    public function index()
    {
        return view ('admin.anak.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.anak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
     
        $messages = [
            'NIK.required' => 'NIK wajib diisi.',
            'NIK.unique' => 'NIK tidak boleh sama.',
            'NIK.min' => 'NIK harus 16 digit.',
            'nama.required' => 'Nama wajib diisi.',
            'nama.min' => 'Nama minimal 3 huruf.',
            'jenis_kelamin.required' => 'Jenis Kelamin harus diisi.',
            'Tempat_lahir.required' => 'Tempat lahir harus diisi',
            'Tanggal_lahir.required' => 'Tanggal lahir harus diisi',
            'email.required' => 'Email wajib diisi.',
            'email.unique' => 'Email sudah terpakai.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 4 karaketer.',
            'no_telp.required' => 'No telepon wajib diisi.',
            'id_kecamatan.required' => 'Kecamatan wajib diisi.',

        ];
        $validator = $request->validate([
            // 'NIK' => ['required', 'min:16',
            //             Rule::unique('dokter', 'NIK')],
            // 'nama' => 'required|min:3',
            // 'email' => ['required', 'email',
            //             Rule::unique('users', 'email')],
            // 'password' => 'required',
            // 'no_telp' => 'required',
            // 'id_kecamatan' => 'required',
            // 'jenis_kelamin' => 'required',
            // 'tempat_lahir' => 'required',
            // 'tanggal_lahir' => 'required',
            // 'no_str' => 'required',
           
        ], $messages);

            $anak = new Anak();
            $anak->id_orangtua=$request->orangtua;
            $anak->nama = $request->nama;
            $anak->tanggal_lahir = $request->tanggal_lahir;
            $anak->sekolah = $request->sekolah;
            $anak->kelas = $request->kelas;
            $anak->bb = $request->bb;
            $anak->tb = $request->tb;

            $anak->save();
            
            
        
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

        return view('admin.anak.edit',compact('anak'));
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
        $anak = Anak::find($id);

        $anak->id_orangtua=$request->orangtua;
        $anak->nama = $request->nama;
        $anak->tanggal_lahir = $request->tanggal_lahir;
        $anak->sekolah = $request->sekolah;
        $anak->kelas = $request->kelas;
        $anak->bb = $request->bb;
        $anak->tb = $request->tb;

        $anak->save();
        return redirect()->route('anak.index');
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

    // Orangtua
}
