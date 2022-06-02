<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelajar_ujian extends Model
{
    use HasFactory;

    public function ujian(){
        return $this->belongsTo(Ujian::class);
    }

    public function pelajar(){
        return $this->belongsTo(Pelajar::class);
    }
}
