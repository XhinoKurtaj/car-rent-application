<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use App\Http\Requests\CarStoreRequest;
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
        $cars = Car::where('availability','1')
            ->with('locations','property','wishlists','user')
            ->get();
        return View("home", compact('cars'));
    }

    public function store(CarStoreRequest $request)
    {
        $validated = $request->validated();
        $car = Car::insertGetId([
            'user_id' => auth()->user()->id,
            'model' => $request->get('model'),
            'type' => $request->get('type'),
            'engine_size' => $request->get('engine_size'),
            'fuel_economy' => $request->get('fuel_economy'),
            'rent_price' => $request->get('rent_price'),
            'condition_check' => $request->get('condition_check'),
            'availability' => 1,
            'created_at' => today(),
        ]);
        $images = new ImagesController();
        $images->storeCarsPhoto($car, $request->photos);
//        $properties = CarPropertiesController::store(
//            $car,
//            $request->get('property_name'),
//            $request->get('property_value')
//        );
        $location = LocationController::store(
            $car,
            $request->get('parked_latitude'),
            $request->get('parked_longitude')
        );
        return redirect('home');
    }

    public function view()
    {
        return view('CarsView/AddCarForRent');
    }

    public function show($carId)
    {
        $cars = Car::where('id',$carId)
            ->with(
                'locations',
                'property',
                'wishlists',
                'user',
                'images',
                'reviews',
                'comments')
            ->get();

        return view('CarsView/CarDetails',compact('cars'));
    }
}
