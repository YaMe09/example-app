<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index' , ['name' => 'Arein']);
});

Route::get('/xxx', function () {
    return 'Hello World';
}) -> name('hello');

Route::get('/hello', function () {
    return  redirect() -> route('hello');
});

Route::get('/greet/{name}', function ($name) {
    return 'Hello ' . $name . '!';
});

Route::fallback(function () {
    return 'Still got somewhere!';
});
