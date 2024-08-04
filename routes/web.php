<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;


Route::get('user-comment-photo', [PostController::class, 'index']);


Route::get('admin-galeri-photo', [CommentController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});
