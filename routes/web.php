<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); });
Route::get('/about', function () { return view('about'); });
Route::get('/home', function () { return view('home'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/blog', function () { return view('blog'); });
// servislerimi
Route::get('/services', function () { return view('services'); });
Route::get('/services2', function () { return view('services2'); });
Route::get('/portfolio', function () { return view('portfolio'); });




