<?php

use Illuminate\Database\Seeder;

class InterestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interests')->insert([
            ['category' => 'Educación'],
            ['category' => 'Salud'],
            ['category' => 'Cultura'],
            ['category' => 'Practicas'],
            ['category' => 'Lugares'],
            ['category' => 'Instituiciones de apoyo']
        ]);
    }
}
