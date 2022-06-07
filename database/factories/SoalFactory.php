<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\soal>
 */
class SoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'deskripsi' => $this->faker->paragraph(3),
            'jawaban' => $this->faker->randomElements(['a', 'b', 'c', 'd']),
            'a' => $this->faker->word(1),
            'b' => $this->faker->word(1),
            'c' => $this->faker->word(1),
            'd' => $this->faker->word(1),
            'ujian_id' => $this->faker->numberBetween(1, 3),
            'pelajaran_id' => $this->faker->numberBetween(1, 3),
            'pengajar_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
