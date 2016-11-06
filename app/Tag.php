<?php

namespace App;

use App\News;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['title'];

    public function news()
    {
        return $this->belongsToMany(News::class);
    }
}
