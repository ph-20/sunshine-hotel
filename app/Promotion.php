<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    //
    protected $table = 'promotions';
    protected $fillable = ['code', 'discount', 'start_date', 'end_date'];

    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }
}
