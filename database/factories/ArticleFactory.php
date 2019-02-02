<?php

use Faker\Generator as Faker;
use App\Model\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title'=>$faker->text(20),
        'content'=>$faker->text(100),
        'author_id'=>rand(1,20),
        'views'=>$faker->numberBetween(2,222),
        'created_at' => $faker->dateTimeBetween('-10 years', '+10 years')
    ];
});
