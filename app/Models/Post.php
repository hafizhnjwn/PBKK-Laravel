<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn ($post) => $post['$slug'] == $slug);

        if(!$post){
            abort(404);
        }

        return $post;
    }
}