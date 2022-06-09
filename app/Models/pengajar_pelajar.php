<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajar_pelajar extends Model
{
    public function pengajar(){
        return $this->belongsTo(pengajar::class);
    }

    public function pelajaran(){
        return $this->belongsTo(pelajaran::class);
    }

    use HasFactory;
}
