<?php

use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\User\PostsController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/user/posts')->name('user');

Route::get('/posts', [PostsController::class, 'index'])->name('posts');

Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');

Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');

Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');

Route::get('/posts/{post}/edit', [PostsController::class, 'edit'])->name('posts.edit');

Route::put('/posts/{post}', [PostsController::class, 'update'])->name('posts.update');

Route::delete('/posts/{post}', [PostsController::class, 'delete'])->name('posts.delete');

Route::resource('/posts/{post}/comments', CommentController::class);
