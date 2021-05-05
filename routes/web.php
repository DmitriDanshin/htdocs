<?php

use App\Http\Controllers\{HomeController, PostController, TestController};
use Illuminate\{Support\Facades\Route};

Route::get('/', [HomeController::class, 'index']);

Route::resource('/posts', PostController::class, ['parameters'=> [
    'posts'=>'id',
]]);

Route::fallback(function () {
    abort(404, 'Error');
    return redirect()->route('home');
});

Route::get('/test', [TestController::class, 'show']);

