<?php

namespace Database\Seeders;

use App\Models\pengajar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\soal;
use App\Models\pelajaran;
use App\Models\Ujian;
use Illuminate\Database\Seeder;
use App\Models\pelajar;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PelajaranSeeder::class,
            PelajaranUjianSeeder::class,
            PelajarPelajaranSeeder::class,
            PelajarSeeder::class,
            PelajarUjianSeeder::class,
            PengajarPelajarSeeder::class,
            PengajarSeeder::class,
            SoalSeeder::class,
            UjianSeeder::class,
        ]);
    }
}
