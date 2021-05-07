<?php

namespace App\Http\Controllers;

use App\Models\Rubric;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        $rubrics = Rubric::all();
        return view('about', [
            'rubrics' => $rubrics
        ]);
    }
}
