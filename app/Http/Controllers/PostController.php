<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostValidate;

class PostController extends Controller
{
    public function createPost(){
        return view("post");
    }

    public function savePost(PostValidate $request){
        return "Post data is valid!";
    }
}
