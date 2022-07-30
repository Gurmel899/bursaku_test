<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Mobil;
use \App\Models\Motor;
class Kendaraan extends Model
{
    use HasFactory;
      protected $table = "kendaraans";
      protected $guarded = [];

      public  function motors(){
        return $this->hashMany(Motor::class);
      }

       public function mobils(){
       return $this->hashMany(Mobil::class);
       }
}