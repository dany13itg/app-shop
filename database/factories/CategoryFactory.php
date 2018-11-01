<?php

use Faker\Generator as Faker;
use App\category;

$factory->define(category::class, function (Faker $faker) {
    return [
        'name'=>ucfirst($faker->word),
        'description'=>$faker->sentence(10)
    ];
});
