<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pengajar_pelajar>
 */
class Pengajar_PelajarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pengajar_id' => $this->faker->numberBetween(1, 5),
            'pelajaran_id' => $this->faker->numberBetween(1, 15),
        ];
    }
}
