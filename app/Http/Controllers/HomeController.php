<?php


namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Rubric;
use App\Models\Tag;
use MathPHP\LinearAlgebra\MatrixFactory;

class HomeController extends Controller
{
    public function index()
    {

        $posts = Post::query()->where('id', '>=', '0')->limit(4)->get();
        $rubrics = Rubric::all();

        $data = range(0, 20);
        $data2 = [
            'title' => 'MyTitle',
            'age' => 12
        ];


        return view('welcome', compact('rubrics', 'posts', 'data', 'data2'));
    }

    public function test(): string
    {
        return __METHOD__;
    }
}
