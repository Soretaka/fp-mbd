<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Ujian;
use App\Models\pelajar_ujian;
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

    public function viewSoal(pelajar_ujian $pelajar_ujian){
        $soals=soal::where('ujian_id',$pelajar_ujian->ujian_id)->get();
        return view('ujian',[
            'soals' => $soals,
            'pelajar_ujian' => $pelajar_ujian,
        ]);
    }

    public function cariNilai(Request $request){
        $userAnswers=$request->ans;
        $ujian_id=$request->ujian_id;
        $pelajar_id=$request->pelajar_id;
        $pelajar_ujian_id=$request->pelajar_ujian;
        $realAnswers= soal::where('ujian_id',$ujian_id)
                    ->orderBy('id')
                    ->pluck('jawaban');
        $counts = soal::where('ujian_id',$ujian_id)->count();
        $ujian= ujian::where('id',$ujian_id)->get()->first();
        $flag=0;
        $ansright=0;
        foreach($realAnswers as $realans){
            if($realans == $userAnswers[$flag]){
                $ansright+=1;
            };
        $flag+=1;
        }
        $nilai=$ansright/$counts * 100;
        $ujian_pelajaran=pelajar_ujian::findOrFail($pelajar_ujian_id);
        if($nilai > $ujian->kkm){
            $status = 1;
        }else{
            $status =0;
        }
        $new_data=[
            "id" => $ujian_pelajaran->id,
            "pelajar_id" => $ujian_pelajaran->pelajar_id,
            "ujian_id" => $ujian_pelajaran->ujian_id,
            "nilai" => $nilai,
            "status" => $status
        ];
        DB::table('pelajar_ujians')->where('id',$ujian_pelajaran->id)->update($new_data);
        return view('tampilkan_nilai',[
            'nilai' => $nilai,
        ]);
    }
}
