<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pelajaran>
 */
class PelajaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nama"=> $this->faker->name(),
            "bab"=> $this->faker->word(1),
            "teori" => $this->faker->paragraph(),
            "video" => $this->faker->paragraph()
        ];
    }
}
