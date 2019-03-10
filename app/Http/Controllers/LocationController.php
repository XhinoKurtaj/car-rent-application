<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public static function store($carId, $parkedLat, $parkedLon, $keysLat, $keysLon)
    {
        $carLocation = CarProperty::create([
            'parked_latitude' => $parkedLat,
            'parked_longitude' => $parkedLon,
            'car_id' => $carId,
            'keys_latitude' => $keysLat,
            'keys_longitude' => $keysLon,
        ]);
    }
}
