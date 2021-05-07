<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Rubric;


class PostController extends Controller
{
    public function index($slur)
    {
        $post = Post::query()->find($slur);
        $rubrics = Rubric::all();

        if ($post === null) {
            return view('errors.404');
        }
        return view('posts.post', [
            'post' => $post,
            'rubrics' => $rubrics
        ]);
    }
}
