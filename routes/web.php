<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;


Route::get('/posts', [PostsController::class, 'index' ]);
Route::get('/posts/create', [PostsController::class, 'create']);
Route::get('/posts/{id}', [PostsController::class, 'show']);
Route::post('/posts', [PostsController::class, 'store']);
