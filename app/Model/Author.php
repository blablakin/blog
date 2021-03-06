<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
   protected $table = 'authors';

   public $timestamps = true;

   public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
