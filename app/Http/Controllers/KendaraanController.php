<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Mobil;
use App\Models\Motor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kendaraans = Kendaraan::get();
        return response()->json([
            'stok'=> Kendaraan::get()->count(),
            'data'=>$kendaraans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {
        $vehicleType = $request->vehicleType;
        if ($vehicleType == 1) {
            $data = $request->all();
            $rules =[
                'mesin' => 'machine',
                'tipe_suspensi' => 'suspension_type',
                'tipe_transmisi'=>'transmision_type',
                // 'kendaraan_id'=>'vehicle_id',
            ];
        } else {
            $data = $request->all();
            $rules =([
                'mesin' => 'machine',
                'kapasitas_penumpang' => 'passenger_capacity',
                'tipe'=>'type',
                // 'kendaraan_id'=> 'vehicle_id',
            ]);
            var_dump($vehicleType);
           }
        $validator = Validator::make($data, $rules);
         if($validator->fails()){
         return response()->json($validator->errors()->toJson(), 400);
         }

        $kendaraan =Kendaraan::create([
        "tahun_keluaran"=>$request->productionDate,
        "warna"=>$request->color,
        "harga"=>$request->price,
    ]);

        $mobil =Mobil::create([
        "mesin"=>$request->machine,
        "kapasitas_penumpang"=>$request->passenger_capacity,
        "tipe"=>$request->type,


        ]);

         $motor =Motor::create([
         "mesin"=>$request->machine,
         "tipe_suspensi"=>$request->suspension_type,
         "tipe_transmisi"=>$request->transmision_type,

         ]);

         $validator = Validator::make($request->all(), [
         'tahun_keluaran' => 'required|string|max:255',
         'warna' => 'required|string|max:255',
         'harga' => 'required|string|max:255',

         ]);
        if($validator->fails()){
        return response()->json($validator->errors()->toJson(), 400);
        }
         $validator = Validator::make($request->all(), [
         'mesin' => 'required|string|motor|max:255',
         'tipe_suspensi' => 'required|string|max:255',
         'tipe_transmisi' => 'required|string|max:255',

        ]);
         if($validator->fails()){
         return response()->json($validator->errors()->toJson(), 400);
         }
          $validator = Validator::make($request->all(), [
          'mesin' => 'required|string|mobil|max:255',
          'kapasitas_penumpang' => 'required|string|max:255',
          'tipe' => 'required|string|max:255',
          ]);
          if($validator->fails()){
          return response()->json($validator->errors()->toJson(), 400);
          }
        return response()->json([
        'data'=>$kendaraan
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function show(Kendaraan $kendaraan)
    {
         return response()->json([
            'data'=>$kendaraan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kendaraan $kendaraan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
         $kendaraan->tahun_keluaran=$request->tahun_keluaran;
         $kendaraan->warna=$request->warna;
         $kendaraan->harga=$request->harga;
        //  $kendaraan->kendaraan_id->$request->kendaraan_id;
         $kendaraan->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();
         return response()->json([
            'messege'=>'Data Success'
        ],204);
    }
}