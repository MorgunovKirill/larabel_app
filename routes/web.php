<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\LogMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home');

//Route::get('/test', TestController::class)->name('test')->middleware(LogMiddleware::class);
Route::get('/test', TestController::class)->name('test');

Route::get('/users', [UsersController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::middleware('guest')->group(function () {
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');

    Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');

    Route::post('/blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');
});

Route::fallback(function () {
    return 'Fallback';
});
