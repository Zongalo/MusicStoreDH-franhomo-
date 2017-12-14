<?php

use Faker\Generator as Faker;

$factory->define(App\Viento::class, function (Faker $faker) {
    return [
    	
    	 'name' => $faker->unique()->word(),
    	 'description' => $faker->paragraph(),
    	 'price' => $faker->randomFloat(NULL, 0, 6000),
    	 'thubnail' => $faker->word(),
    	 
        //
    ];
});
