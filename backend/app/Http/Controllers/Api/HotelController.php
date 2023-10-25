<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        return Hotel::all();
    }

    public function show(Hotel $hotel)
    {
        return $hotel;
    }
}
