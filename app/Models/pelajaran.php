<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelajaran extends Model
{
    use HasFactory;

    public function ujian(){
        return $this->hasMany(Ujian::class);
    }

    public function soal(){
        return $this->hasMany(Soal::class);
    }

    public function pengajar_pelajar(){
        return $this->hasMany(pengajar_pelajar::class);
    }
}
