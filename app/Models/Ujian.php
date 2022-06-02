<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    use HasFactory;

    public function pelajaran(){
        return $this->hasMany(Pelajaran::class);
    }

    public function pelajar_ujian(){
        return $this->hasMany(pelajar_ujian::class);
    }

    public function soal(){
        return $this->hasMany(Soal::class);
    }
}
