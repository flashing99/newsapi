<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable=['title','content','featured_image','date_written','votes_up','votes_down','user_id' ,'category_id' ];
}
