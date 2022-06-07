<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Ujian;
use App\Models\soal;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function viewDataUjian(){
        $ujian_atr = DB::table('ujians')->select("id", "nama")->get();
        
        foreach ($ujian_atr as $ujian){
            $total_peserta = DB::table('pelajar_ujians')->where('ujian_id', $ujian->id)->count();
            $ujian->total_peserta = $total_peserta;
        }
        return view('dataujian', ["datas" => $ujian_atr]);
    }
    public function viewSoal(Ujian $ujian){
        $soals=soal::where('ujian_id',$ujian->id)->get();
        return view('ujian',[
            'soals' => $soals
        ]);
    }
}
