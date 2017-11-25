<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $table = 'rooms';
    protected $fillable = ['id', 'name', 'price', 'status', 'description', 'amount_people', 'room_type_id',
        'images1', 'images2', 'images3'];

    public function bookRooms()
    {
        return $this->hasMany('App\BookRoom','room_id');
    }

    public function roomTypes()
    {
        return $this->belongsTo('App\RoomType','room_type_id');
    }

    public function bookings()
    {
        return $this->belongsToMany('App\Booking','book_rooms');
    }
}
