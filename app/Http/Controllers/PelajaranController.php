<?php

namespace App\Http\Controllers;

use App\Models\pelajaran;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    public function listpelajaran(){
        $pelajaran = pelajaran::select('id','nama', 'bab')->distinct()->get();
        // return $pelajaran;
        return view('pelajaran',[
            'pelajaran' => $pelajaran,
        ]);
    }
}
