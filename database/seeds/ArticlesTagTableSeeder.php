<?php

use Illuminate\Database\Seeder;
use App\Model\ArticleTag;

class ArticlesTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ArticleTag::class, 50)->create();
    }
}