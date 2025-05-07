<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('main-page');});
Route::get('/blog', function () {return view('blog-page');});
Route::get('/about', function () {return view('about-page');});
