<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tax_id',
        'address',
        'city',
        'room_number',
    ];

    public function roomTypes()
    {
        return $this->belongsToMany(RoomType::class);
    }

    public function accommodations()
    {
        return $this->belongsToMany(Accommodation::class);
    }
}
