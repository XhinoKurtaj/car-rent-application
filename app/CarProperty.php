<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarProperty extends Model
{
    protected $fillable = [
        'property_name',
        'property_value',
        'car_id'
    ];

    public function cars()
    {
        return $this->belongsTo(Car::class);
    }
}
