<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookRoomService extends Model
{
    //
    protected $table = 'book_room_services';

    public function bookRooms()
    {
        return $this->belongsTo('App\BookRoom');
    }

    public function services()
    {
        return $this->belongsTo('App\Service');
    }
}
