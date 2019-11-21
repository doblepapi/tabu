<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=['titulo','resumen','link','author','keyWords','created_at','updated_at'];
}
