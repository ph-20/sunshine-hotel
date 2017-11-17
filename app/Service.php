<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $table = 'services';

    public function bookRoomServices()
    {
        return $this->hasMany('App\BookRoomService');
    }

    public function bookRooms()
    {
        return $this->belongsToMany('App\BookRoom');
    }
}
