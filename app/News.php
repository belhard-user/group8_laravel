<?php

namespace App;

use App\Tag;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title'];

    public function tag()
    { // news_tag
        return $this->belongsToMany(Tag::class);
    }
}
