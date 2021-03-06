<?php

use App\Http\Controllers\MySqlController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\UjianController;
use Illuminate\Support\Facades\Route;
use App\Models\pelajar;
use App\Http\Controllers\PelajarController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\PelajarUjianController;
use App\Http\Controllers\PengajarPelajarController;
use App\Http\Controllers\SoalController;
use App\Models\pelajar_ujian;

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
    return view('layout.dashboard');
});

// route ujian
Route::get('/data_ujian', [UjianController::class, 'viewDataUjian'])->name('data_ujian');
Route::get('/ujian/{pelajar_ujian:id}',[UjianController::class,'viewSoal']);
Route::post('/store', [UjianController::class, 'cariNilai'])->name('store-data-jawaban');
Route::get('/rank/{ujian:id}',[UjianController::class, 'rank']);
Route::get('/ujianform',[UjianController::class,'viewformujian'])->name('tambah-ujian');
Route::post('/store_data_ujian',[UjianController::class,'storeUjian'])->name('store-data-ujian');
Route::get('/lihat_dashboard/{pelajar:id}', [PelajarController::class, 'lihatDashboard']);
Route::get('/ujian/{ujian:id}/jumlah_lolos', [PelajarUjianController::class, 'countLolos']);
Route::get('/rank/{ujian:id}',[UjianController::class, 'rank']);
Route::get('/nilaiform',[UjianController::class,'insertNilai'])->name('tambah-nilai');
Route::post('/store_nilai_ujian', [UjianController::class, 'store'])->name('store-data-nilai-ujian');
// route soal
Route::get('/soal', [SoalController::class, 'listSoal']);
Route::get('/pengajar/{pengajar:id}/jumlah_soal', [SoalController::class, 'countForPengajar']);
Route::get('/soal/jumlah_soal', [SoalController::class, 'viewPerPelajaran']);
Route::get('/soal/{pelajaran:id}/jumlah_soal', [SoalController::class, 'countForPelajaran']);
Route::get('/{pelajaran:id}/soal', [SoalController::class, 'viewSoalPelajaran']);
Route::post('/store_nilai', [SoalController::class, 'nilai'])->name('store-nilai');

// route pelajaran
Route::get('/pelajaran/{pelajaran:id}', [PengajarPelajarController::class, 'countForPengajar']);
Route::get('/pelajaran', [PelajaranController::class, 'listpelajaran']);

Route::get('/soal', [SoalController::class, 'listSoal']);
// Route::get('/ujian/{ujian:id}',[UjianController::class,'viewUjian']);
Route::get('/listpelajar', [PelajarController::class, 'listpelajar']);
Route::get('/pengajar', [PengajarController::class, 'listpengajar']);

Route::get('/debug', [MySqlController::class, 'testView']);

