<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\CategoriesController;


Route::get('/', [Controller::class, 'index']);

Route::resource('posts', PostsController::class)->whereNumber(['post']);

Route::resource('categories', CategoriesController::class)->whereNumber(['category']);

Route::resource('tests', TestsController::class)->whereNumber(['test']);
