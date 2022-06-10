<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MySqlController extends Controller
{
    public function testView(){
        $results = DB::select('call stalkPeserta(1)');
        dd($results);
    }
}
