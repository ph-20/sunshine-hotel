<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $table = 'bookings';

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function bookRooms()
    {
        return $this->hasMany('App\BookRoom');
    }

    public function promotions()
    {
        return $this->belongsTo('App\Promotion');
    }

    public function rooms()
    {
        return $this->belongsToMany('App\Room');
    }
}
