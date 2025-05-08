<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('main-page');});
Route::get('/post', function () {return view('post-page');});
Route::get('/about', function () {return view('about-page');});
