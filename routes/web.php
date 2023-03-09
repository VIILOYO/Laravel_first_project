<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\UpdateController;
Use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\PostTrashController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function() {
    return redirect()->route('posts.index');
});

Route::prefix('posts')->group(function () {
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
