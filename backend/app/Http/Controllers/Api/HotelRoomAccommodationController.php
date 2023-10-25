<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\HotelRoomAccommodation;

class HotelRoomAccommodationController extends Controller
{
    public function index()
    {
        return HotelRoomAssigned::all();
    }

    public function show(HotelRoomAssigned $hotelroomaccommodation)
    {
        return $hotelroomaccommodation;
    }
}
