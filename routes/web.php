<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); });
Route::get('/about', function () { return view('about'); });
Route::get('/home', function () { return view('home'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/blog', function () { return view('blog'); });
Route::get('/services', function () { return view('services'); });




