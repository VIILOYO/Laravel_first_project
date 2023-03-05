<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function() {
    return redirect()->route('posts.index');
});

Route::prefix('posts')->resource('posts', PostController::class);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
