<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {
    protected $fillable = [
        'title', 'event_date', 'hour', 'location', 'value', 'description'
    ];
    
}