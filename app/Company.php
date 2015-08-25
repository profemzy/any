<?php

namespace Anywork;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = ['id', 'name','information','email', 'year_estab', 'address', 'category_id', 'user_id'];

    public function categories()
    {
        return $this->belongsToMany('Anywork\Category')->withTimestamps();
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }

}
