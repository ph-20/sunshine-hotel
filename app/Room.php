<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $table = 'rooms';
    protected $fillable = ['name', 'room_type_id', 'price', 'status',
        'description', 'amount_people', 'image1', 'image2', 'image3'];

    public function bookRooms()
    {
        return $this->hasMany('App\BookRoom');
    }

    public function roomTypes()
    {
        return $this->belongsTo('App\RoomType', 'room_type_id');
    }

    public function bookings()
    {
        return $this->belongsToMany('App\Booking', 'book_rooms');
    }
}
