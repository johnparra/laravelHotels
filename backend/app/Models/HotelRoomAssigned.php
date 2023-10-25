<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelRoomAssigned extends Model
{
    use HasFactory;

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class);
    }

    public function roomTypes()
    {
        return $this->belongsToMany(RoomType::class);
    }

    public function accommodations()
    {
        return $this->belongsToMany(Accommodation::class);
    }
}
