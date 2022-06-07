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
            'soals' => $soals,
            'ujian' => $ujian,
        ]);
    }

    public function cariNilai(Request $request){
        $userAnswers=$request->ans;
        $ujian_id=$request->ujian_id;
        // dd($userAnswers[1]);
        $realAnswers= soal::where('ujian_id',$ujian_id)
                    ->orderBy('id')
                    ->pluck('jawaban');
        // dd($realAnswers);    
        $counts = soal::where('ujian_id',$ujian_id)->count();
        $flag=0;
        $ansright=0;
        foreach($realAnswers as $realans){
            if($realans == $userAnswers[$flag]){
                $ansright+=1;
            };
        $flag+=1;
        }
        $nilai=$ansright/$counts * 100;
        return view('tampilkan_nilai',[
            'nilai' => $nilai,
        ]);
    }
}
