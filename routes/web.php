<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\CategoriesController;


Route::get('/', [Controller::class, 'index']);

Route::prefix('posts')->controller(PostsController::class)->group(function() {
    Route::get('/',  'index')->name('posts.index');
    Route::get('/create', 'create')->name('posts.create');
    Route::get('/{id}', 'show')->name('posts.show');
    Route::post('/', 'store')->name('posts.store');
});

Route::resource('categories', CategoriesController::class)->whereNumber(['category']);

/* Замена этому

Route::prefix('categories')->controller(CategoriesController::class)->group(function() {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::get('/{id}', 'show');
    Route::post('/', 'store');
    Route::get('/{id}/edit', 'edit');
    Route::put('/{id}', 'update');
    Route::delete('/{id}', 'destroy');
});

*/

Route::resource('tests', TestsController::class)->whereNumber(['test']);

// Route::prefix('tests')->controller(TestsController::class)->group(function() {
//     Route::get('/', 'index')->name('home');
//     Route::get('/create', 'create');
//     Route::get('/{id}', 'show')->name('tests.show');
//     Route::post('/', 'store');
//     Route::get('/{id}/update', 'update');
//     Route::put('/{id}', 'successUpdate');
//     Route::delete('/{id}', 'desctroy')->name('tests.delete');;
// });
