<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostTrashController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function() {
    return redirect()->route('posts.index');
});

Route::prefix('posts')->resource('posts', PostController::class);

Route::get('trash', [PostTrashController::class, 'index'])->name('trash.index');
Route::get('trash/{id}/restore', [PostTrashController::class, 'restore'])->name('trash.restore');
Route::delete('trash/{id}/delete', [PostTrashController::class, 'destroy'])->name('trash.destroy');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
