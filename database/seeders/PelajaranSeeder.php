<?php

namespace Database\Seeders;

use App\Models\pelajaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Faker\Provider\Youtube($faker));
        pelajaran::create([
            'nama' => 'Fisika',
            'bab' => '1',
            'teori' => $faker->text(),
            'video' => $faker->youtubeShortUri(),
        ]);
        pelajaran::create([
            'nama' => 'Fisika',
            'bab' => '2',
            'teori' => $faker->text(),
            'video' => $faker->youtubeShortUri(),
        ]);
        pelajaran::create([
            'nama' => 'Fisika',
            'bab' => '3',
            'teori' => $faker->text(),
            'video' => $faker->youtubeShortUri(),
        ]);
        pelajaran::create([
            'nama' => 'Fisika',
            'bab' => '4',
            'teori' => $faker->text(),
            'video' => $faker->youtubeShortUri(),
        ]);
        pelajaran::create([
            'nama' => 'Fisika',
            'bab' => '5',
            'teori' => $faker->text(),
            'video' => $faker->youtubeShortUri(),
        ]);
        pelajaran::create([
            'nama' => 'Biologi',
            'bab' => '1',
            'teori' => $faker->text(),
            'video' => $faker->youtubeShortUri(),
        ]);
        pelajaran::create([
            'nama' => 'Biologi',
            'bab' => '2',
            'teori' => $faker->text(),
            'video' => $faker->youtubeShortUri(),
        ]);
        pelajaran::create([
            'nama' => 'Biologi',
            'bab' => '3',
            'teori' => $faker->text(),
            'video' => $faker->youtubeShortUri(),
        ]);
        pelajaran::create([
            'nama' => 'Biologi',
            'bab' => '4',
            'teori' => $faker->text(),
            'video' => $faker->youtubeShortUri(),
        ]);
        pelajaran::create([
            'nama' => 'Biologi',
            'bab' => '5',
            'teori' => $faker->text(),
            'video' => $faker->youtubeShortUri(),
        ]);
        pelajaran::create([
            'nama' => 'Matematika',
            'bab' => '1',
            'teori' => $faker->text(),
            'video' => $faker->youtubeShortUri(),
        ]);
        pelajaran::create([
            'nama' => 'Matematika',
            'bab' => '2',
            'teori' => $faker->text(),
            'video' => $faker->youtubeShortUri(),
        ]);
        pelajaran::create([
            'nama' => 'Matematika',
            'bab' => '3',
            'teori' => $faker->text(),
            'video' => $faker->youtubeShortUri(),
        ]);
        pelajaran::create([
            'nama' => 'Matematika',
            'bab' => '4',
            'teori' => $faker->text(),
            'video' => $faker->youtubeShortUri(),
        ]);
        pelajaran::create([
            'nama' => 'Matematika',
            'bab' => '5',
            'teori' => $faker->text(),
            'video' => $faker->youtubeShortUri(),
        ]);
    }
}
