<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    return view(
        'posts',
        [
            'title' => 'Blog', 'posts' => [
                [
                    'id' => 1,
                    'title' => 'First Article',
                    'slug' => 'first-article',
                    'author' => 'Hendra Setiawan',
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore sunt in doloribus ex natus, veritatis voluptates nostrum omnis nesciunt nobis eligendi dolores, officia, tenetur doloremque pariatur aspernatur veniam numquam quibusdam?'
                ],
                [
                    'id' => 2,
                    'title' => 'Second Article',
                    'slug' => 'second-article',
                    'author' => 'Fajar Alfian',
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore sunt in doloribus ex natus, veritatis voluptates nostrum omnis nesciunt nobis eligendi dolores, officia, tenetur doloremque pariatur aspernatur veniam numquam quibusdam?'
                ]
            ]
        ]
    );
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'title' => 'First Article',
            'slug' => 'first-article',
            'author' => 'Hendra Setiawan',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore sunt in doloribus ex natus, veritatis voluptates nostrum omnis nesciunt nobis eligendi dolores, officia, tenetur doloremque pariatur aspernatur veniam numquam quibusdam?'
        ],
        [
            'id' => 2,
            'title' => 'Second Article',
            'slug' => 'second-article',
            'author' => 'Fajar Alfian',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore sunt in doloribus ex natus, veritatis voluptates nostrum omnis nesciunt nobis eligendi dolores, officia, tenetur doloremque pariatur aspernatur veniam numquam quibusdam?'
        ]
    ];
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
