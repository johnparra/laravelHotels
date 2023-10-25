<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    protected $table = 'accommodations';
    protected $fillable = [
        'name', 'description'
        // Otros campos relacionados con la acomodación
    ];

    // Define relaciones con otros modelos si es necesario
    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'hotelsroomassigned', 'accommodation_id', 'hotel_id');
    }
}
