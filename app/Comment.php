<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Returns the author of the comment
     */
    public function author(){
        return $this->belongsTo('App\User');
    }

    /**
     *  Returns post of corresponding comment
     */
    public function post(){
        return $this->belongsTo('App\Post');
    }
}
