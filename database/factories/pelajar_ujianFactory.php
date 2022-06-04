<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pelajar_ujian>
 */
class pelajar_ujianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    
     public function definition()
    {
        return [
            "pelajar_id" => $this->faker->numberBetween(0, 200),
            "ujian_id" => $this->faker->numberBetween(0, 20),
            "nilai" => $this->faker->numberBetween(75, 100),
            // biar semua lulus aja ceritanya ehehe
            "status"=> true,
        ];
    }

    public function lulus()
    {
        return $this->state(function (array $attributes) {
            return [
                "nilai" => $this->faker->numberBetween(75, 100),
                'status' => true
            ];
        });
    }

    public function tidak_lulus(){
        return $this->state(function(array $attributes){
            return [
                "nilai" => $this->faker->numberBetween(0, 74),
                "status" => false,
            ];
        });
    }
}
