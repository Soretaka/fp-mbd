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
        $count = DB::table('pelajar_ujians')->where('ujian_id', $ujian->id)->where('status', true)->count();
        $datas = pelajar_ujian::all()->where('ujian_id', $ujian->id)->where('status', true);
        return view('jumlah_lolos', [
            'datas' => $datas,
            'ujian' => $ujian,
            'count' => $count,
        ]);
    }
}
