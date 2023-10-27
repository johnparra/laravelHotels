<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class HotelCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return $this->collection->map(function($hotel){
            return [
                'id' => $hotel->id,
                'type' => 'hotel',
                'attributes' => [
                    'name' => $hotel->name,
                    'city' => $hotel->city,
                    'address' => $hotel->address,
                    'room_number' => $hotel->room_number
                ]
            ];
        })->toArray();
    }
}
