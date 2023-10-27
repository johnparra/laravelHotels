<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
        return response()->json(new HotelResource($hotel), Response::HTTP_CREATED);
    }

    public function update(Request $request, Hotel $hotel)
    {
        $hotel->update($request->all());
        return response()->json(new HotelResource($hotel), Response::HTTP_OK);
    }

    public function delete(Request $request, Hotel $hotel)
    {
        $hotel->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

}
