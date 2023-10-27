<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\HotelController;
use App\Http\Controllers\Api\RoomTypeController;
use App\Http\Controllers\Api\AccommodationController;

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/


Route::get('hotels', [ HotelController::class, 'index']);
Route::get('hotels/{hotel}', [ HotelController::class, 'show']);
Route::post('hotels/', [ HotelController::class, 'store']);
Route::post('hotels/{hotel}', [ HotelController::class, 'update']);
Route::delete('hotels/{hotel}', [ HotelController::class, 'delete']);

Route::get('roomtypes', [ RoomTypeController::class, 'index']);
Route::get('roomtypes/{roomtype}', [ RoomTypeController::class, 'show']);

Route::get('accommodations', [ AccommodationController::class, 'index']);
Route::get('accommodations/{accommodation}', [ AccommodationController::class, 'show']);
