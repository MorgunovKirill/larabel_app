<?php

use App\Http\Controllers\Api\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/posts', [PostsController::class, 'index'])->name('posts');

Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');
