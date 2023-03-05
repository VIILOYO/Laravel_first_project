<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function() {
    return view('posts.layouts.main');
});

Route::prefix('/posts')->controller(PostController::class)->group(function () {
    Route::get('', 'index')->name('post.index');
    Route::get('/{id}', 'post')->whereNumber('id')->name('post.show');
    Route::get('/likest', 'likest');
    Route::get('/create', 'create');
    Route::get('/first_or_create', 'firstOrCreate');
    Route::get('/update_or_create', 'updateOrCreate');
    Route::get('/{id}/update', 'update')->whereNumber('id');
    Route::get('/{id}/delete', 'delete')->whereNumber('id');
    Route::get('/{id}/like', 'like')->whereNumber('id')->name('post.like');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
