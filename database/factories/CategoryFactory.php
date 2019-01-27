<?php

use Faker\Generator as Faker;
use App\Model\Category;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->text(15)
    ];
});
