<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('welcome', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' =>[
        [
            'id' => 1,
            'slug' => 'salma-samsung',
            'title' => 'Salma Samsung',
            'author' => 'Muhammad Hafizh Najwan Noor',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam impedit ipsum similique ducimus quod, amet perferendis quidem totam illum nihil debitis consequatur inventore dolorem nobis quam expedita. Eaque, mollitia voluptate.'
        ],
        [
            'id' => 2,
            'slug' => 'rayzord',
            'title' => 'Rayzord',
            'author' => 'Neva Talitha Desian Noor',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe aperiam sunt, error obcaecati tempora fuga quod deleniti sint, temporibus, ipsam maiores non harum ad quo sequi cupiditate? Totam, maiores vel. '
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'salma-samsung',
            'title' => 'Salma Samsung',
            'author' => 'Muhammad Hafizh Najwan Noor',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam impedit ipsum similique ducimus quod, amet perferendis quidem totam illum nihil debitis consequatur inventore dolorem nobis quam expedita. Eaque, mollitia voluptate.'
        ],
        [
            'id' => 2,
            'slug' => 'rayzord',
            'title' => 'Rayzord',
            'author' => 'Neva Talitha Desian Noor',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe aperiam sunt, error obcaecati tempora fuga quod deleniti sint, temporibus, ipsam maiores non harum ad quo sequi cupiditate? Totam, maiores vel. '
        ]

    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
