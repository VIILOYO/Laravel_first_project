<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\MyPlaceController;


Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/{id}', [PostsController::class, 'post'])->whereNumber('id');
Route::get('/posts/likest', [PostsController::class, 'likest']);

Route::get('friends', [FriendsController::class, 'index']);
Route::get('friends/{id}', [FriendsController::class, 'friend'])->whereNumber('id');
Route::get('friends/dead', [FriendsController::class, 'deadPeople']);

Route::get('tests', [TestsController::class, 'index']);
Route::get('tests/{id}', [TestsController::class, 'test']);

Route::get('places', [MyPlaceController::class, 'index']);
Route::get('places/{id}', [MyPlaceController::class, 'place'])->whereNumber('id');
Route::get('places/high', [MyPlaceController::class, 'highRating']);