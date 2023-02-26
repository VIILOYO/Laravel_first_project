<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesAdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TrashController;

use App\Http\Controllers\TestsController;


// Главная страница
Route::get('/', [Controller::class, 'index']);

// Посты
Route::resource('posts', PostsController::class)->whereNumber(['post']);

// Категории
Route::resource('categories', CategoriesAdminController::class); // Админ
Route::get('categories/show/{slug}', [CategoriesController::class, 'show'])->name('categories.slug'); // Клиент

// Корзина постов
Route::resource('trash', TrashController::class);
Route::put('/trash/{id}/restore', [TrashController::class, 'restore'])->name('trash.restore');

// Тесты
Route::resource('tests', TestsController::class)->whereNumber(['test']);
