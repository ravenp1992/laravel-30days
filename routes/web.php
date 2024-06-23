<?php

use App\Models\Comment;
use App\Models\Job;
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
    return view('jobs', ['jobs' => Job::all()]);
});

Route::post('/jobs', function () {
    // Job::where();
});

Route::get('/jobs/{job}', function (Job $job) {
    return view('job', ['job' => $job]);
});

Route::get('/comments', function () {
    dd(Comment::all());
});
