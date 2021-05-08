<?php


namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Rubric;
use App\Models\Tag;

class HomeController extends Controller
{
    private $amountOfPosts = 4;
    public function index()
    {

        $posts = Post::query()->where('id', '>=', '0')->limit($this->amountOfPosts)->get();
        $rubrics = Rubric::all();

        return view('welcome', [
            'posts' => $posts,
            'rubrics' => $rubrics,
            'header' => '<h1 class="text-center">Main page</h1>'
        ]);
    }

    public function test(): string
    {
        return __METHOD__;
    }
}
