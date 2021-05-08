<?php

use App\Http\Controllers\{AboutController, ChatController, HomeController, PostController};
use Illuminate\{Support\Facades\Route};

Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/chat', [ChatController::class, 'index']);


Route::get('posts/{slur}', [PostController::class, 'index']);

Route::get('/{slur}', function () {
    return redirect('/home');
});



Route::get('/', function () {
    return redirect('/home');
})->name('home');

Route::fallback(function () {
    abort(404, 'Error');
    return redirect()->route('/home');
});


