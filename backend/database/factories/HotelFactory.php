<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'tax_id' => fake()->randomNumber(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'room_number' => fake()->randomNumber(2, true),
        ];
    }
}
