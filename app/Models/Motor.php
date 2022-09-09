<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Kendaraan;
class Motor extends Model
{
    use HasFactory;
    protected $table = "motors";
    protected $guarded = [];

    public function kendaraan(){
    return $this->belongsTo(kendaraan::class);
    
    }

}