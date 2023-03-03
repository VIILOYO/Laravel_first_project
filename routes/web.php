<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\MyPlaceController;

Route::get('/', function() {
    return view('main');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{id}', [PostController::class, 'post'])->whereNumber('id');
Route::get('/posts/likest', [PostController::class, 'likest']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{id}/update', [PostController::class, 'update'])->whereNumber('id');
Route::get('/posts/{id}/delete', [PostController::class, 'delete'])->whereNumber('id');

Route::get('friends', [FriendController::class, 'index'])->name('friends');
Route::get('friends/{id}', [FriendController::class, 'friend'])->whereNumber('id');
Route::get('friends/dead', [FriendController::class, 'deadPeople']);
Route::get('friends/create', [FriendController::class, 'create']);
Route::get('friends/{id}/die', [FriendController::class, 'die'])->whereNumber('id');;
Route::get('friends/{id}/delete', [FriendController::class, 'delete'])->whereNumber('id');;

Route::get('tests', [TestController::class, 'index'])->name('tests');
Route::get('tests/{id}', [TestController::class, 'test'])->whereNumber('id');
Route::get('tests/create', [TestController::class, 'create']);
Route::get('tests/{id}/update', [TestController::class, 'update'])->whereNumber('id');
Route::get('tests/{id}/delete', [TestController::class, 'delete'])->whereNumber('id');

Route::get('places', [MyPlaceController::class, 'index'])->name('places');
Route::get('places/{id}', [MyPlaceController::class, 'place'])->whereNumber('id');
Route::get('places/high', [MyPlaceController::class, 'highRating']);
Route::get('places/create', [MyPlaceController::class, 'create']);
Route::get('places/{id}/update', [MyPlaceController::class, 'update'])->whereNumber('id');;
Route::get('places/{id}/delete', [MyPlaceController::class, 'delete'])->whereNumber('id');;
