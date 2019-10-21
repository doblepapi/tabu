<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    function User() {
        return $this->belongsToMany('App\User');
    }
}
