<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Resources\Post as PostResources;

/** 
* My Method
* * Important information is highlighted
* ! Deprecated method, do not use
* ? Should this method be exposed in the public API?
* TODO: Insert todo information here
* @param myParam The parameter for this method
*/

class PostsController extends Controller
{
    
    /** 
    * This method takes all posts with its comments
    */

    public function index(){
        $posts = Post::with(['comments' => function($q){
            $q->paginate(3);
        },'comments.author'])->paginate(10);
        return PostResources::collection($posts);
    }

}
