<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\pelajar_ujian;

class PelajarUjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pelajar_ujian::factory(300)->lulus()->create();
        pelajar_ujian::factory(100)->tidak_lulus()->create();
    }
}
