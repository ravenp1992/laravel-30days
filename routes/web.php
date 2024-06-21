<?php

use Illuminate\Support\Arr;
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
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000',
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000',
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000',
            ],
        ],
    ]);
});

Route::get('/jobs/{id}', function (int $id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50,000',
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$10,000',
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$40,000',
        ],

    ];

    // $job = array_filter($jobs, function ($job) use ($id) {
    //     return $job['id'] === $id;
    // });

    $job = Arr::first($jobs, fn ($value) => $value['id'] === $id);

    return view('job', ['job' => $job]);
});
