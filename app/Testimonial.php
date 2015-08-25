<?php

namespace Anywork;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{

    protected $table = 'testimonials';

    protected $fillable = ['id', 'details','user_id'];


    public function user()
    {
        return $this->belongsTo('Anywork\User');
    }
}
