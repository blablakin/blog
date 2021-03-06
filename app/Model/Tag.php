<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
