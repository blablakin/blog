<?php

use App\Model\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'name'=>$faker->word
    ];
});
