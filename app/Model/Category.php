<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'articles_categories', 'category_id');
    }
}
