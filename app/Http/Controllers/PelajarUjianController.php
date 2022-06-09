<?php

namespace App\Http\Controllers;

use App\Models\pelajar_ujian;
use App\Models\Ujian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelajarUjianController extends Controller
{
    //
    public function countLolos(Ujian $ujian){
        $lulus = DB::table('pelajar_ujians')->where('ujian_id', $ujian->id)->where('status', true)->count();
        $male = DB::table('pelajar_ujians')->join('pelajars','pelajar_ujians.pelajar_id','=','pelajars.id')
        ->where('ujian_id', $ujian->id)->where('jenis_kelamin', 'male')->where('status', true)->count();
        $female = DB::table('pelajar_ujians')->join('pelajars','pelajar_ujians.pelajar_id','=','pelajars.id')
        ->where('ujian_id', $ujian->id)->where('jenis_kelamin', 'female')->where('status', true)->count();
        $winrate = DB::table('pelajar_ujians')->where('ujian_id', $ujian->id)->count();
        $winrate = $lulus / $winrate * 100;
        $males = $male/$lulus * 100;
        $females = $female/$lulus * 100;
        $ratio = $male/$female;
        return view('jumlah_lolos', [
            'datas' => $datas,
            'ujian' => $ujian,
            'count' => $lulus,
            'winrate' => $winrate,
            'males' => $males,
            'females' => $females,
            'male' => $male,
            'female' => $female,
            'ratio' => $ratio
        ]);
    }
}
