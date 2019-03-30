<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'model',
        'type',
        'engine_size',
        'fuel_economy',
        'rent_price',
        'condition_check',
        'availability',
        'photo_id',
        'created_at'
    ];

    protected $timestamp = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function  locations()
    {
        return $this->hasMany(Location::class);
    }

    public function property()
    {
        return $this->hasOne(CarProperty::class);
    }

    public function rents()
    {
        return $this->hasMany(Rent::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function wishlists()
    {
        return $this->belongsToMany(Car::class, 'wishlists',
            'car_id','user_id');
    }

    public function images()
    {
        return $this->morphMany('App\Image','imageable');
    }

    public function reviews()
    {
        return $this->morphMany('App\Review','reviewable');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment','commentable');
    }
}
