<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookRoomService extends Model
{
    //
    protected $table = 'book_room_services';
    protected $fillable = ['book_room_id', 'unit','service_id'];

    public function bookRooms()
    {
        return $this->belongsTo('App\BookRoom','book_room_id');
    }

    public function services()
    {
        return $this->belongsTo('App\Service','service_id');
    }
}
