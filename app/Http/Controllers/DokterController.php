<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dokter;
use App\Models\Kecamatan;
use Illuminate\Validation\Rule;



class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function data(){
        $dokter = Dokter::all();
        return datatables()->of($dokter)
        ->addColumn('action', function($row){
            $btn = '<div class="btn-group btn-group-sm">';
            $btn .= '<a href="'.route('dokter.edit',$row->id).'" type="button" id="btn-edit" class="btn btn-warning btn-icon"><i class="lni lni-pencil-alt "></i></a>';
            $btn .= '<button title="Delete" id="btn-delete" class="delete-modal btn btn-danger btn-icon"><i class="lni lni-trash"></i></button>';
            
            $btn .= '</div>';
            return $btn;
        })
        ->rawColumns(['action'])->addIndexColumn()->make(true);
    }
    public function index()
    {
        
        return view('admin.dokter.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dokter.create');
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

        $user = New User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role ="dokter";
        if($user){
            $user->save();
        }
        if($user){
            $dokter = new Dokter();
            $dokter->id_users=$user->id;
            $dokter->id_kecamatan = 1;
            $dokter->nik = $request->nik;
            $dokter->nama = $request->nama;
            $dokter->jenis_kelamin = $request->jenis_kelamin;
            $dokter->tempat_lahir = $request->tempat_lahir;
            $dokter->tanggal_lahir = $request->tanggal_lahir;
            $dokter->no_telp = $request->no_telp;
            $dokter->no_str= $request->no_str;
            if($dokter){
                $dokter->save();
                return redirect()->route('dokter.index');
            }
            
        }
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
        $dokter = Dokter::find($id);
    
        return view('admin.dokter.edit',compact('dokter'));
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
        $dokter = Dokter::find($id);
        $user = User::where('id', $dokter->id_users)->update([
            
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => "dokter"
        ]);
        
        
        if($user){
            $dokter = $dokter->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_telp' => $request->no_telp,
            'no_str' => $request->no_str

            ]);
            return redirect()->route('dokter.index');
            
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokter = Dokter::find($id);
        $dokter ->delete();
        return response()->json(['data'=>'success delete data']);
    }
}
