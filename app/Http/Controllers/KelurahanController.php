<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;
use Validator;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data(){
        $kelurahan = Kelurahan::all();
        return datatables()->of($kelurahan)
        ->addColumn('action', function($row){
            $btn = '<div class="btn-group btn-group-sm">';
            $btn .= '<button type="button" id="btn-edit" class="btn btn-info"><i class="lni lni-pencil"></i></button>';
            $btn .= '<button type="button" id="btn-delete" class="btn btn-danger"><i class="lni lni-trash"></i></button>';
            $btn .= '</div>';

           return $btn;
       })
       ->addColumn('kecamatan',function($row){
        return $row->kecamatan->nama;
    })
       ->addIndexColumn()
       ->make(true);
    }

    public function index()
    {
        return view ('admin.kelurahan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [

        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json(['error' => $validator->errors()->all()]);
        }else{
            $data= Kelurahan::create([
                'id_kecamatan'=> request('id_kecamatan'),
                'nama'=> request('nama'),

            ]);
            return response()->json(['success'=>'Data added successfully','data'=>$data]);
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
        $rules = [

        ];
  
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
          return response()->json(['errors' => $validator->errors()->all()]);
        } else {
          $data = Kelurahan::find($id);
          $data->id_kecamatan   = $request->kecamatan_edit;
          $data->nama = $request->nama_edit;
          $data->save();
  
          return response()->json(['success'=>'Data added successfully','data'=>$data]);
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
        //
    }

    public function getDesa(Request $request){
        $desa = Kelurahan::where("id_kecamatan",$request->id_kecamatan)->pluck('nama');
        return response()->json($desa);
    }

    public function listDesa($id_kecamatan)
    {
        $desa = Kelurahan::WHERE('id_kecamatan', $id_kecamatan)->get();
        return response()->json($desa);
    }


}
