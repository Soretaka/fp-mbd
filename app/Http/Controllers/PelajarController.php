<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pelajar;
use phpDocumentor\Reflection\PseudoTypes\False_;

class PelajarController extends Controller
{
    public function listpelajar(){
        $pelajars = pelajar::select()->get();
        // return $pelajaran;
        return view('listpelajar',[
           'pelajar' => $pelajars,
        ]);
    }
    
    public function lihatDashboard(pelajar $pelajar){
        $pelajar_data = $pelajar->get_basic_atr();
        
        //get their history ujian
        // $ujian_history = DB::table('pelajar_ujians')
        //                 ->select('ujian_id', 'nilai', 'status')
        //                 ->where('pelajar_id', $idPelajar)
        //                 ->get();
        $pelajar_ujian_data = $pelajar->pelajar_ujian;
        $total_ujian = 0;

        $ujian_detail = [];
        $everUjian = false;
        foreach ($pelajar_ujian_data as $ujian){
            $ujian_atr = DB::table('ujians')
                         ->select('nama', 'tanggal', "id")
                         ->where('id', $ujian->ujian_id)
                         ->get();
            $ujian_atr[0]->nilai = $ujian->nilai;
            $ujian_atr[0]->status = $ujian->status;
            array_push($ujian_detail, $ujian_atr[0]);
            $everUjian = true;
            // $ujian->nama = $ujian_atr->nama;
            // $ujian->tanggal = $ujian_atr->tanggal;
            // hitung total nilai
            $total_ujian += $ujian->nilai;
        }
        
        // dd($ujian_detail);
        // dd($pelajar_data, $ujian_history, $result);
        // dd($pelajar_data, $pelajar_ujian_data, $ujian_detail);
        if($everUjian)
            return view("lihatdashboard", ["pelajar" => $pelajar_data,
                                       "ujian_history" => $ujian_detail,
                                        "total_ujian" => $total_ujian]);
    
        return view("lihatdashboard_kosong", ["pelajar" => $pelajar_data]);
    }


}
