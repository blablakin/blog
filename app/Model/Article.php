<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class,'articles_categories', 'article_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}

