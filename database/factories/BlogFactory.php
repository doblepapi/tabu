<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'titulo' => $faker->titulo,
        'resumen'=> $faker->resumen,
        'link'=> $faker->link,
        'author'=> $faker->author,
        'year'=> $faker->year,
        'keyWord'=>$faker->keyWord,
    ];
});
