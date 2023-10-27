<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class HotelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type' => 'hotel',
            'attributes' => [
                'name' => $this->name,
                'city' => $this->city,
                'address' => $this->address,
                'room_number' => $this->room_number
            ],
            'relationships' => [
                'todo'
            ]
        ];
    }
}
