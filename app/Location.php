<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'parked_latitude',
        'parked_longitude',
        'car_id',
        'keys_latitude',
        'keys_longitude',
    ];

    public function cars()
    {
        return $this->belongsTo(Car::class);
    }
}
