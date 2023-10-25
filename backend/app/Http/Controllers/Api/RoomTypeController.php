<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\RoomType;

class RoomTypeController extends Controller
{
    public function index()
    {
        return RoomType::all();
    }

    public function show(RoomType $roomtype)
    {
        return $roomtype;
    }
}
