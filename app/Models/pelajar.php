<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelajar extends Model
{
    use HasFactory;

    public function pelajar_ujian(){
        return $this->hasMany(pelajar_ujian::class);
    }

    public function pelajaran(){
        return $this->hasMany(pelajaran::class);
    }
}
