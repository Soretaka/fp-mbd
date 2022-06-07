<?php

namespace App\Http\Controllers;

use App\Models\pengajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pelajaran;
use App\Models\soal;
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
    public function viewPerPelajaran(){
        $datas = DB::table('soals')
                ->join('pelajarans','soals.pelajaran_id','=','pelajarans.id')
                ->orderBy('pelajaran_id')
                ->get();
        $jumsol=[];
        foreach($datas as $data){
            $jumsol[$data->pelajaran_id][]=$data;
        }
        return view('soal_pelajaran',[
            'datas'=>$jumsol,
        ]);
    }
    
    public function countForPelajaran(pelajaran $pelajaran){
        $count = DB::table('soals')->where('pelajaran_id',$pelajaran->id)->count();
        // $soals = DB::table('soals')->where('pelajaran_id',$pelajaran->id)->get();
        // $soals = DB::table('soals')
        // ->join('pengajars','pengajars.id','=','soals.pengajar_id')
        //         ->join('ujians','soals.ujian_id','=','ujians.id')
        //         ->get();
        // dd($soals[0]);
        $soals=soal::where('pelajaran_id',$pelajaran->id)->get();
//        dd($soals[0]->ujian->nama);
        return view ('jumlah_soal_pelajaran',[
            'pelajaran' => $pelajaran,
            'count' => $count,
            'soals' => $soals,
        ]);
    }
}
