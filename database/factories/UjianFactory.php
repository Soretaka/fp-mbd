<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ujian>
 */
class UjianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nama" => $this->faker->word() . $this->faker->numerify("-###"),
            "tanggal" => $this->faker->date(),
            "durasi"=> $this->faker->numberBetween(10, 300),
            "kkm" => $this->faker->numberBetween(65,75),
        ];
    }
}
