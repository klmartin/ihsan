<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    public function regions(){
        return $this->belongsTo(Region::class,'regionid');
    }

    public function districts(){
        return $this->belongsTo(Region::class,'districtid');
    }
    
}
