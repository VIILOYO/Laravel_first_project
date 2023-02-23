<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TrashController;


Route::get('/', [Controller::class, 'index']);

Route::resource('posts', PostsController::class)->whereNumber(['post']);

Route::resource('categories', CategoriesController::class);

Route::resource('trash', TrashController::class);
Route::put('/trash/{id}/restore', [TrashController::class, 'restore'])->name('trash.restore');

Route::resource('tests', TestsController::class)->whereNumber(['test']);
