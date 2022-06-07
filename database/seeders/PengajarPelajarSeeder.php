<?php

namespace Database\Seeders;

use App\Models\pengajar_pelajar;
use Database\Factories\PengajarPelajarFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengajarPelajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pengajar_pelajar::factory(50)->create();
    }
}
