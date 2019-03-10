<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\CarPropertiesController;
use App\Http\Controllers\LocationController;
use phpDocumentor\Reflection\Location;

class CarsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cars = Car::Where('availability','1')
            ->with('locations','property','wishlists')
            ->get();
        return View("home", compact('cars'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'model' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'engine_size' => 'required|string|max:255',
            'fuel_economy' => 'required|string|max:255',
            'rent_price' => 'required|decimal',
            'condition_check' => 'required|string|max:255',
            ]);
        $userId = auth()->user()->id;
        $car = Car::insertGetId([
            'model' => $request->get('model'),
            'type' => $request->get('type'),
            'engine_size' => $request->get('engine_size'),
            'fuel_economy' => $request->get('fuel_economy'),
            'rent_price' => $request->get('rent_price'),
            'condition_check' => $request->get('condition_check'),
            'availability' => 1
        ]);
        $properties = CarPropertiesController::store(
            $car,
            $request->get('property_name'),
            $request->get('property_value')
        );
        $location = LocationController::store(
            $car,
            $request->get('parked_latitude'),
            $request->get('parked_longitude'),
            $request->get('keys_latitude'),
            $request->get('keys_longitude')
        );
        return redirect('home');
    }

}
