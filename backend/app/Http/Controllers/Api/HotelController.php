<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\HotelResource;
use App\Http\Resources\HotelCollection;

use App\Models\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        return new HotelCollection(Hotel::all());
    }

    public function show(Hotel $hotel)
    {
        return new HotelResource($hotel);
    }

    public function store(Request $request)
    {
        $hotel = Hotel::create($request->all());
        return response()->json('creado', );
    }
}
