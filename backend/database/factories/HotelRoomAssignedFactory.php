<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HotelRoomAssigned>
 */
class HotelRoomAssignedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hotel_id' => \App\Models\Hotel::all()->random()->id,
            'room_type_id' => \App\Models\RoomType::all()->random()->id,
            'accommodation_id' => \App\Models\Accommodation::all()->random()->id,
        ];
    }
}
