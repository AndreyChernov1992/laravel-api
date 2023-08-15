<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Racer>
 */
class RacerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "short" => $this->faker->name(),
            "racer" => $this->faker->name(),
            "time" => $this->faker->unique()->randomDigit(),
            "mark" => $this->faker->name() 
        ];
    }
}
