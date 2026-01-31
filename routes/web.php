<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
    Route::get('/about', function () {
    return 'about page';
});
Route::get('/jobs/create', function () {
    return view('Jobs.create');
});

Route::get('/jobs', function () {
    return view('Jobs.index');
});

Route::get('/contact', function () {
    return view('contact');
});