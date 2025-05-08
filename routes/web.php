<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('main-page');});
Route::get('/about', function () {return view('about-page');});
Route::prefix('post')->group(function () {
    route::get('',[PostController::class,'index'])->name('post.index');
    route::get('{id}',[PostController::class,'show'])->name('post.show');
});
