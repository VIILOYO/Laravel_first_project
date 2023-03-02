<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\MyPlaceController;

Route::get('/', function() {
    return view('main');
});

Route::get('/posts', [PostsController::class, 'index'])->name('posts');
Route::get('/posts/{id}', [PostsController::class, 'post'])->whereNumber('id');
Route::get('/posts/likest', [PostsController::class, 'likest']);

Route::get('friends', [FriendsController::class, 'index'])->name('friends');
Route::get('friends/{id}', [FriendsController::class, 'friend'])->whereNumber('id');
Route::get('friends/dead', [FriendsController::class, 'deadPeople']);

Route::get('tests', [TestsController::class, 'index'])->name('tests');
Route::get('tests/{id}', [TestsController::class, 'test']);

Route::get('places', [MyPlaceController::class, 'index'])->name('places');
Route::get('places/{id}', [MyPlaceController::class, 'place'])->whereNumber('id');
Route::get('places/high', [MyPlaceController::class, 'highRating']);