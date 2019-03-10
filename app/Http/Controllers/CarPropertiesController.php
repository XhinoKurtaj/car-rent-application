<?php

namespace App\Http\Controllers;

use App\CarProperty;
use Illuminate\Http\Request;

class CarPropertiesController extends Controller
{
    public static  function store($carId, $propertyName, $propertyValue)
    {
        $carProperties = CarProperty::create([
           'property_name' => $propertyName,
            'property_value' => $propertyValue,
            'car_id' => $carId
        ]);
    }
}
