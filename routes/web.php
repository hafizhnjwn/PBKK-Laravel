<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('welcome', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    // $posts= Post:: with(['author', 'category'])->get();
    $posts= Post::get();
    return view('posts', ['title' => 'Blog', 'posts' =>$posts]);
});

Route::get('/posts/{post:slug}', function(Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function(User $user){
    // $posts= $user->posts->load('author', 'category');

    return view('posts', ['title' => 'Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    // $posts= $category->posts->load('author', 'category');

    return view('posts', ['title' => 'Articles about ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
