<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'photo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected  $timestamp = false;

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function photo()
    {
        return $this->belongsTo(Image::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function rents()
    {
        return $this->hasMany(Rent::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function wishlists()
    {
        return $this->belongsToMany(Car::class, 'wishlists',
            'user_id','car_id');
    }

}
