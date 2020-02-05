<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Returns the author of the post
     */
    public function author(){
        return $this->belongsTo('App\User');
    }

    /**
     *  Returns comments of corresponding post
     */
    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
