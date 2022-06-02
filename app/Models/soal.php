<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soal extends Model
{
    use HasFactory;

    public function pelajaran(){
        return $this->belongsTo(Pelajaran::class);
    }

    public function ujian(){
        return $this->belongsTo(Ujian::class);
    }
}
