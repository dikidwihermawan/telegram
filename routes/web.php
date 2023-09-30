<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/posts/create', [PostController::class, 'store'])->name('posts.create');
Route::get('{post}', [PostController::class, 'show'])->name('posts.show');
