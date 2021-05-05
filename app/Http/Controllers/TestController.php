<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Collection;

class TestController extends Controller
{
    public function show()
    {
        $collection = collect(['hello', 'today', 'i', 'will', 'do', 'something']);
        $collection2 = collect(['hello', 'today', 'i', 'will', 'do', 'something']);
        $collection = $collection->merge($collection2);



        dump(get_class($collection));
        return view("test", ['data' => "data"]);
    }
}
