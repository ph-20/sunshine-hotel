<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookRoom extends Model
{
    //
    protected $table = 'book_rooms';
    protected $fillable = ['room_id', 'booking_id'];

    public function bookings()
    {
        return $this->belongsTo('App\Booking');
    }

    public function rooms()
    {
        return $this->belongsTo('App\Room');
    }

    public function bookRoomServices()
    {
        return $this->hasMany('App\BookRoomService');
    }

    public function services()
    {
        return $this->belongsToMany('App\Service')->withPivot('unit');;
    }
}
