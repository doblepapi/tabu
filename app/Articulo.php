<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable=['titulo','resumen','link', 'author', 
    'year', 'keyWords', 'created_at','updated_at' ];
}
