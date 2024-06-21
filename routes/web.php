<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Yo!',
        'name' => 'Lary Robot',
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'title' => 'Director',
                'salary' => '$50,000',
            ],
            [
                'title' => 'Programmer',
                'salary' => '$10,000',
            ],
            [
                'title' => 'Teacher',
                'salary' => '$40,000',
            ],
        ],
    ]);
});