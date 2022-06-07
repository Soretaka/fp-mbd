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
        $winrate = DB::table('pelajar_ujians')->where('ujian_id', $ujian->id)->count();
        $winrate = $lulus / $winrate * 100;
        return view('jumlah_lolos', [
            'ujian' => $ujian,
            'count' => $lulus,
            'winrate' => $winrate,
        ]);
    }
}
