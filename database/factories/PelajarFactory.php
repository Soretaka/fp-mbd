<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pelajar>
 */
class PelajarFactory extends Factory
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
            "kelas"=> $this->faker->numberBetween(1, 12),
            "jenis_kelamin" => $this->faker->randomElement(['male', 'female']),
            "tanggal_lahir" => $this->faker->date(),
            "tempat_lahir" => $this->faker->city(),
        ];
    }
}
