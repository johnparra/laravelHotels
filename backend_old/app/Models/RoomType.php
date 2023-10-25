<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $table = 'room_types';
    protected $fillable = [
        'name', 'description'
        // Otros campos relacionados con el tipo de habitación
    ];

    // Define relaciones con otros modelos si es necesario
    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'hotelsroomassigned', 'room_type_id', 'hotel_id');
    }
}
