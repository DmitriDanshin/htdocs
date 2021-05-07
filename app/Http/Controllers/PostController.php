<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($slur)
    {

        $post = Post::query()->find($slur);
        if($post === null){
            return view('errors.404');
        }
        return view('posts.post', ['post' => $post]);
    }
}
