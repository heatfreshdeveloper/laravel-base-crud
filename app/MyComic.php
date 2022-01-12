<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyComic extends Model
{
    protected $fillable = [
        "title", "description", "thumbs", "price", "series", "date"
    ];
}
