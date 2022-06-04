<?php

use App\Http\Controllers\UjianController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelajarController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data_ujian', [UjianController::class, 'viewDataUjian']);
Route::get('/lihat_dashboard/{pelajar:id}', [PelajarController::class, 'lihatDashboard']);