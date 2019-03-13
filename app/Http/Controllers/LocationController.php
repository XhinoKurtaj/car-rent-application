<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function store($carId, $parkedLat, $parkedLon)
    {
        $carLocation = Location::create([
            'parked_latitude' => $parkedLat,
            'parked_longitude' => $parkedLon,
            'car_id' => $carId
        ]);
    }
}
