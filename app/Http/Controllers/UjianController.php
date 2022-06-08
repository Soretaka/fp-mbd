<?php

namespace App\Http\Controllers;
use App\Models\soal;
use App\Models\Ujian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\pelajar_ujian;

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

    public function viewRanking(){
        // $ujian = DB::table('pelajar_ujians')-> select('ujian_id') -> join('ujians', 'ujians.id', '=', 'pelajar_ujians.ujian_id')->get();
        // $pelajar = DB::table('pelajar_ujians')-> select('pelajar_id')->join('pelajars', 'pelajars.id', '=', 'pelajar_ujians.pelajar_id')->get();
        // $rank = pelajar_ujian::select('nilai', 'pelajars.nama', 'as', 'pelajar','ujians.nama', 'as', 'ujian', 'ujians.id', 'as', 'uid', 'pelajars.id', 'as', 'pid',)
        // ->join('pelajars', 'pelajars.id', '=', 'pelajar_ujians.pelajar_id')
        // -> join('ujians', 'ujians.id', '=', 'pelajar_ujians.ujian_id')        
        // -> orderBy('nilai', 'desc');
        // // $rank = 
        // // dd($rank);
        // // $pelajars = DB::table('pelajars')->select("id", "nama")->get();
        // // $ujian = DB::table('ujians')->select("id", "nama")->get();
        
        // $ranks = DB::table('pelajar_ujians') -> select(,'nilai',)->get()
        //     ->where('pelajar_id', $pelajar->id, 'ujian_id', $ujian->id)
        //     ->orderBy('nilai');

        // $rank = DB::select(DB::raw("select rank() over(order by nilai desc, u.nama desc) as ranking, p.nama, nilai, u.nama 
        // from( select rank() over(order by nilai desc, u.nama desc) as ranking, nilai, u.nama, u.id as uid, p.id as pid from
        // mbd.pelajar_ujians pu join mbd.pelajars p on p.id = pu.pelajar_id
        // join mbd.ujians u on u.id = pu.ujian_id group by nilai, u.nama, u.id, p.id) as a
        // join mbd.ujians u on u.id = a.uid join mbd.pelajars p on p.id = a.pid
        // order by u.nama , nilai desc"));
        // dd($rank);
            // $ujian->total_peserta = $total_peserta;
        
        return view('rank', ["datas" => $ranks]);
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
