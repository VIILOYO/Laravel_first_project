<?php

use App\Http\Controllers\PostTrashController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;


Route::get('/', function() {
    return redirect()->route('posts.index');
});

Route::get('/admin', AdminController::class)
                        ->middleware('auth')
                        ->middleware('admin')
                        ->name('admin.index');

Route::group(['prefix' => 'posts', 'namespace' => 'App\Http\COntrollers\Post'], function () {
    Route::get('/', IndexController::class)->name('posts.index');
    Route::get('/create', CreateController::class)->name('posts.create');
    Route::post('/store', StoreController::class)->name('posts.store');
    Route::get('/{post}', ShowController::class)->name('posts.show');
    Route::get('/{post}/edit', EditController::class)->name('posts.edit');
    Route::put('/{post}', UpdateController::class)->name('posts.update');
    Route::delete('/{post}', DestroyController::class)->name('posts.destroy');
});

Route::get('trash', [PostTrashController::class, 'index'])->name('trash.index');
Route::get('trash/{id}/restore', [PostTrashController::class, 'restore'])->name('trash.restore');
Route::delete('trash/{id}/delete', [PostTrashController::class, 'destroy'])->name('trash.destroy');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
