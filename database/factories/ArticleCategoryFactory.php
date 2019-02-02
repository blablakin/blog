<?php

use Faker\Generator as Faker;
use App\Models\ArticleCategory;
use Illuminate\Support\Facades\DB;

$factory->define(ArticleCategory::class, function (Faker $faker) {
    return [
        'article_id' => rand(1, count(DB::table('articles')->get()->toArray())-1),
        'category_id' => rand(1, count(DB::table('categories')->get()->toArray())-1)
    ];
});