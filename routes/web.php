<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TestsController;


Route::get('/', [Controller::class, 'index']);

Route::controller(PostsController::class)->group(function() {
    Route::get('/posts',  'index');
    Route::get('/posts/create', 'create');
    Route::get('/posts/{id}', 'show');
    Route::post('/posts', 'store');
});

Route::controller(TestsController::class)->group(function() {
    Route::get('/tests', 'index');
    Route::get('/tests/create', 'create');
    Route::get('/tests/{id}', 'show');
    Route::post('/tests', 'store');
});
