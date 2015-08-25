<?php

namespace Anywork;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    protected $table = 'bookings';

    protected $fillable = ['id', 'details', 'service_id', 'user_id'];


    public function user()
    {
        return $this->hasOne('App\User');
    }


    public  function  service()
    {
        return $this->hasOne('App\Service');
    }
}
