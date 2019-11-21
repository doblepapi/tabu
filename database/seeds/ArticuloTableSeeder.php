<?php

use Illuminate\Database\Seeder;

class ArticuloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articulos')->insert([
            'titulo' => Str::random(10),
            'resumen' => Str::random(20),
            'link' => Str::random(10),
            'author' => Str::random(10),
            'year' => Str::random(10),
            'keyWords' => Str::random(10)
        ]);
        
        DB::table('articulos')->insert([
            'titulo' => Str::random(10),
            'resumen' => Str::random(20),
            'link' => Str::random(10),
            'author' => Str::random(10),
            'year' => Str::random(10),
            'keyWords' => Str::random(10)
        ]);
    }
}
