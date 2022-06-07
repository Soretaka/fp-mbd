<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\soal;
use App\Models\pelajaran;
use App\Models\pengajar;
use App\Models\Ujian;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        soal::factory(20)->create();
        pelajaran::factory(20)->create();
        Ujian::factory(20)->create();
        pengajar::factory(5)->create();
    }
}
