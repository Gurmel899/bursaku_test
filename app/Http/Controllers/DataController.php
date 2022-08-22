<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
  public function kendaraan() {
  $data = "Data All kendaraan";
  return response()->json($data, 200);
  }

  public function kendaraanAuth() {
  $data = "Welcome " . Auth::user()->name;
  return response()->json($data, 200);
  }
}
