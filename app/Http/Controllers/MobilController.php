<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $mobils = Mobil::all();
         return response()->json([
         'data'=>$mobils
         ]);
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
        $mobil =Mobil::create([
        "mesin"=>$request->mesin,
        "kapasitas_penumpang"=>$request->kapasitas_penumpang,
        "tipe"=>$request->tipe,
        // "kendaraan_id"=>$request->kendaraan_id
        ]);
        return response()->json([
        'data'=>$mobil
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show(Mobil $mobil)
    {
          return response()->json([
          'data'=>$mobil
          ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobil $mobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobil $mobil)
    {
         $mobil->mesin=$request->mesin;
         $mobil->kapasitas_penumpang=$request->kapasitas_penumpang;
         $mobil->tipe=$request->tipe;
        //  $mobil->kendaraan_id=$request->kendaraan_id;
         $mobil->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobil $mobil)
    {
          $mobil->delete();
          return response()->json([
          'messege'=>'Data mobil berhasil dihapus'
          ],204);
    }
}