<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TestController;


Route::get('/', [Controller::class, 'index']);

Route::get('/posts', [PostsController::class, 'index' ]);
Route::get('/posts/create', [PostsController::class, 'create']);
Route::get('/posts/{id}', [PostsController::class, 'show']);
Route::post('/posts', [PostsController::class, 'store']);

Route::get('/tests', [TestController::class, 'index']);
Route::get('/tests/create', [TestController::class, 'create']);
Route::get('tests/{id}', [TestController::class, 'show']);
Route::post('/tests', [TestController::class, 'store']);