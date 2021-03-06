<?php

namespace App\Http\Controllers;

use App\Car;
use App\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $images = $user->imageables;
        return response()->json($images);
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png ',
        ]);
        $photo = $request->file('image');
        $image = $user->imageables()->create([
            'photo' => $photo->store('images', ['disk' => 'public']),
            'user_id' => $user->id,
        ]);

        return back()->with('success', "Photo created successfully");
    }

    public function storeCarsPhoto($carId, $photos)
    {
        $car = Car::findOrFail($carId);
        foreach ($photos as $photo) {
            $image = $car->images()->create([
                'user_id' => auth()->user()->id,
                'photo' => $photo->store('images/cars', ['disk' => 'public'])
            ]);
        }
    }
}
