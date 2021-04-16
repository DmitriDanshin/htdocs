<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::view('/', 'home')->name('home');
Route::view('/about', 'about');
Route::view('/goods', 'goods');


Route::match(['get', 'post', 'put'], '/contact', function () {
    if (!empty($_POST)) {
        dump($_POST);
    }
    return view('contact');
});

/*
Route::post('/send-email', function (){
    if(!empty($_POST)){
        dump($_POST);
    }
    return 'Send Email';
});

Route::match(['post', 'get'], '/contact', function (){
    if(!empty($_POST)){
        dump($_POST);
    }
    return view('contact');
});

Route::match(['post', 'get'], '/contact', function (){
    if(!empty($_POST)){
        dump($_POST);
    }
    return view('contact');
})->name('contact');

Route::redirect('/about','/contact');
*/

Route::get('/post/{id}', function ($id) {
    return "Post $id";
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/post/create', function () {
        return 'post create';
    });

    Route::get('/post/{id}/edit', function ($id) {
        return "edit post $id";
    })->name('post');

    Route::get('/posts', function () {
        return 'post list';
    });

});

Route::fallback(function () {
    abort(404, 'Error');
    return redirect()->route('home');
});


