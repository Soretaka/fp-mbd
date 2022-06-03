<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function viewDataUjian(){
        $ujian_atr = DB::table('ujians')->select("id", "nama")->get();
        // $nama_ujian = DB::table('ujians')->pluck('nama');
        $total_pesertas = [];
        foreach ($ujian_atr as $ujian){
            $total_peserta = DB::table('pelajar_ujians')->where('ujian_id', $ujian->id)->count();
            // array_push($total_pesertas, $total_peserta);
            $ujian->total_peserta = $total_peserta;
        }
        // $dataArr = [
        //     'nama'=> $nama_ujian,
        //     'id' => $id_ujian,
        //     'total_peserta'  => $total_pesertas
        // ];
        // $dataArr = array_merge($nama_ujian, $id_ujian, $total_pesertas);
        // $dataArr = [];
        // for(int i = )

        // dd($ujian_atr);
        // dd($total_pesertas);
        return view('dataujian', ["datas" => $ujian_atr]);
    }
}
