<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Kendaraan;
class Mobil extends Model
{
    use HasFactory;
     protected $table = "mobils";
     protected $guarded = [];

     public function kendaraan(){
        return $this->belongsTo(kendaraan::class);
     }
}