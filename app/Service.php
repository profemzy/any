<?php

namespace Anywork;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = ['id', 'name'];


    public function booking()
    {
        return $this->belongsTo('App\Booking');
    }
}
