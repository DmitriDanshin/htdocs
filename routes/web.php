<?php

use App\Http\Controllers\{HomeController, PageController, Test\TestController};
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/test', [HomeController::class, 'test']);
Route::get('/test2', [TestController::class, 'test']);
Route::get('/{slug}', [PageController::class, 'show']);

Route::fallback(function () {
    abort(404, 'Error');
    return redirect()->route('home');
});


