<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
  public function book() {
  $data = "Data All Book";
  return response()->json($data, 200);
  }

  public function bookAuth() {
  $data = "Welcome " . Auth::user()->name;
  return response()->json($data, 200);
  }
}