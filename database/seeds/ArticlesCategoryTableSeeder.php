<?php

use Illuminate\Database\Seeder;
use App\Model\Category;
use App\Model\Article;

class ArticlesCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryCount = Category::count();
        Article::all()->each(function($article) use ($categoryCount) {
            $count = rand(1, $categoryCount);
            for ($i = 0; $i < $count; $i++) {
                $catIds[] = rand(1, $categoryCount);
            }
            $article->categories()->attach(array_unique($catIds));
        });
    }
}
