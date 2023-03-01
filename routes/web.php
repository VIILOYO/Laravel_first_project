<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MyPlaceController;


Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/{id}', [PostsController::class, 'post']);

Route::get('hello', [HelloController::class, 'hello']);
Route::get('hello/{id}', [HelloController::class, 'user']);
Route::get('hello/{name}/{id}', [HelloController::class, 'name'])->whereNumber('id')->whereAlpha('name');

Route::get('test', [TestsController::class, 'test']);
Route::get('test/success', [TestsController::class, 'success']);
Route::get('test/fail', [TestsController::class, 'fail']);

Route::get('places', [MyPlaceController::class, 'index']);
Route::get('places/{id}', [MyPlaceController::class, 'place'])->whereNumber('id');