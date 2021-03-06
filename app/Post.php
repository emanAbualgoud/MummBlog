<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'description', 'content', 'category_id', 'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
