<?php

namespace Anywork;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['id', 'name'];

    public function companies()
    {
        return $this->belongsToMany('Anywork\Company')->withTimestamps();
    }
}
