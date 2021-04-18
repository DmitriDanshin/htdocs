<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Date;

class HomeController extends Controller
{
    public function index(): string
    {
        dump(config('app.timezone'));
        return view('home', ['date' =>  date('Y-m-d h:i:s')]);
    }

    public function test(): string
    {
        return __METHOD__;
    }
}
