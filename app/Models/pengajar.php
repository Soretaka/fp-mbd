<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajar extends Model
{
    use HasFactory;
    
    
    public function pengajar_pelajar(){
        return $this->hasMany(pengajar_pelajar::class);
    }

    public function soal(){
        return $this->hasMany(soal::class);
    }
    

}
