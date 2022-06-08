<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengajar;

class PengajarController extends Controller
{
    //
    public function list(){
        $pengajar = pengajar::select()->get();
        // return $pelajaran;
        return view('listpengajar',[
            'pengajar' => $pengajar,
        ]);
    }
}
