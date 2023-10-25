<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'name', 'address', 'tax_id'
        // Otros campos relacionados con un hotel
    ];

    // Define relaciones con otros modelos si es necesario
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function assignments()
    {
        return $this->hasMany(HotelsRoomAssigned::class);
    }
}
