<?php

namespace App\Http\Controllers;

use App\Models\pengajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoalController extends Controller
{
    //
    public function countForPengajar(pengajar $pengajar){
        $count = DB::table('soals')->where('pengajar_id', $pengajar->id)->count();
        return view('jumlah_soal', [
            'pengajar' => $pengajar,
            'count' => $count,
        ]);
    }
}
