<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motors = Motor::paginate(10);
        return response()->json([
            'data'=>$motors
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
        $motor =Motor::create([
            "mesin"=>$request->mesin,
            "tipe_suspensi"=>$request->tipe_suspensi,
            "tipe_transmisi"=>$request->tipe_transmisi,
            "kendaraan_id"=>$request->kendaraan_id
        ]);
         return response()->json([
            'data'=>$motor
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function show(Motor $motor)
    {
        return response()->json([
            'data'=>$motor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function edit(Motor $motor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motor $motor)
    {
        $motor->mesin=$request->mesin;
        $motor->tipe_suspensi=$request->tipe_suspensi;
        $motor->tipe_transmisi=$request->tipe_transmisi;
        $motor->kendaraan_id=$request->kendaraan_id;
        $motor->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motor $motor)
    {
        $motor->delete();
        return response()->json([
            'messege'=>'Data motor berhasil dihapus'
        ],204);
    }
}