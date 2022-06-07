<?php

namespace App\Http\Controllers;

use App\Models\pelajar;
use App\Models\pelajaran;
use App\Models\pengajar;
use Illuminate\Http\Request;

class PengajarPelajarController extends Controller
{
    public function countForPengajar(pelajaran $pelajaran){
        $subject = pelajaran::where('id', '=', $pelajaran->id)->get();

        // return $subject;
        return view('pengajarperpelajar', [
            'subject' => $subject,
        ]);
    }
}
