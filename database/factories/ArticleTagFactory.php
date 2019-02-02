<?php

use Faker\Generator as Faker;
use App\Model\ArticleTag;
use Illuminate\Support\Facades\DB;

$factory->define(ArticleTag::class, function (Faker $faker) {
    return [
        'article_id' => rand(1, count(DB::table('articles')->get()->toArray())-1),
        'tag_id' => rand(1, count(DB::table('tags')->get()->toArray())-1)
    ];
});