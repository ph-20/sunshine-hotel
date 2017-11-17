<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $table = 'rooms';

    public function bookRooms()
    {
        return $this->hasMany('App\BookRoom');
    }

    public function roomTypes()
    {
        return $this->belongsTo('App\RoomType');
    }

    public function bookings()
    {
        return $this->belongsToMany('App\Booking');
    }
}
