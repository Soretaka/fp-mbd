<?php

namespace Database\Seeders;

use App\Models\pengajar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\soal;
use App\Models\pelajaran;
use App\Models\Ujian;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        soal::factory(20)->create();
        pelajaran::factory(20)->create();
        Ujian::factory(20)->create();
        pengajar::factory(5)->create();
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
