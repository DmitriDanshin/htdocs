<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        # $query = DB::insert("INSERT INTO posts (title, text) VALUES (:title, :text)", ['title'=>'статья 6','text' => 'Lorem ipsum 6',]);

        # DB::update('UPDATE posts SET updated_at = :updated WHERE updated_at IS NULL', [ 'updated' => NOW()]);
        # DB::delete('DELETE FROM posts WHERE id > :from and id < :to ', ['from' => 3, 'to' => 7]);
        # $posts = DB::select("SELECT * FROM posts WHERE id <= :id", ['id' => 2]);
        # dump($posts);

        return view('home', ['date' => date('Y-m-d h:i:s')]);
    }

    public function test(): string
    {
        return __METHOD__;
    }
}
