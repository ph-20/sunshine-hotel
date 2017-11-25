<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $table = 'services';
    protected $fillable = ['name', 'price', 'description'];

    public function bookRoomServices()
    {
        return $this->hasMany('App\BookRoomService');
    }

    public function bookRooms()
    {
        return $this->belongsToMany('App\BookRoom', 'book_room_services', 'book_room_id',
            'service_id')
            ->withPivot('unit');
    }
}
