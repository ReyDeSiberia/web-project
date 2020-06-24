<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'desription', 'status', 'user_id','img_url','link_news'
    ];
}
