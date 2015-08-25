<?php

namespace Anywork;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = ['id', 'surname','other_names', 'sex', 'mobile_no', 'contact_add','user_id'];

    public function user()
    {
        return $this->belongsTo('Anywork\User');
    }
}
