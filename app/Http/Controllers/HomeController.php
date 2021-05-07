<?php


namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Rubric;
use App\Models\Tag;

class HomeController extends Controller
{
    public function index()
    {

        $posts = Post::query()->where('id', '>=', '0')->limit(4)->get();
        $rubrics = Rubric::all();

        return view('welcome', [
            'posts' => $posts,
            'rubrics' => $rubrics

        ]);
    }

    public function test(): string
    {
        return __METHOD__;
    }
}
