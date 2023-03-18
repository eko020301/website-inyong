<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('home.contact');
});

$posts = [
    1 => [
        'title' => 'Indroduction to Laravel',
        'content' => 'this is a short introduction to laravel',
        'is_new' => true,
        'has_comments' => true
    ],
    2 => [
        'title' => 'permulaan kedua',
        'content' => 'this is a short introduction to laravel',
        'is_new' => false,
        'has_comments' => false
    ],
    3 => [
        'title' => 'Indroduction to Laravel',
        'content' => 'this is a short introduction to laravel',
        'is_new' => false,
        'has_comments' => false
    ],

];

Route::get('/posts', function () use ($posts) {
    return view ('posts.index', ['posts' => $posts]);
});

Route::get('/posts/{id}', function ($id) use ($posts) {
    abort_if(!isset($posts[$id]), 404);
    return view ('posts.show', ['post' => $posts[$id]]);
});


