<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create(['email'=>'jp@admin.com']);
        \App\Models\User::factory(9)->create();

        \App\Models\RoomType::factory()->create(['name'=>'Estándar']);
        \App\Models\RoomType::factory()->create(['name'=>'Junior']);
        \App\Models\RoomType::factory()->create(['name'=>'Suite']);
        \App\Models\Accommodation::factory()->create(['name'=>'Sencilla']);
        \App\Models\Accommodation::factory()->create(['name'=>'Doble']);
        \App\Models\Accommodation::factory()->create(['name'=>'Triple']);
        \App\Models\Accommodation::factory()->create(['name'=>'Cuadruple']);

        $hotels = \App\Models\Hotel::all();
        $roomTypes = \App\Models\RoomType::all();
        $accommodations = \App\Models\Accommodation::all();

        foreach($hotels as $hotel){
            $hotel->roomTypes()->attach($roomTypes->random(rand(2, 3)));
            $hotel->accommodations()->attach($accommodations->random(rand(2, 3)));
        }

        // \App\Models\HotelRoomAssigned::factory(20)->create();

    }
}
