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

    public function get_basic_atr(){
        // $pelajar_data = DB::table('pelajars')
        //                 ->select('nama', 'tanggal_lahir', 'tempat_lahir', 'kelas')
        //                 ->where('id', $idPelajar)->get();
        $atr = [
            "nama" => $this->nama,
            "tanggal_lahir" => $this->tanggal_lahir,
            "tempat_lahir" => $this->tempat_lahir,
            "kelas" => $this->kelas,
        ];
        return $atr;
    }
}
