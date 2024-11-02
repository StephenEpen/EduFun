<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\WritersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/category/{category}', [CategoryController::class, 'index'])->name('category');

Route::get('/category/{category}/{article}', [CategoryController::class, 'getArticle'])->name('categoryArticle');

Route::get('/writers', [WritersController::class, 'index'])->name('writers');

Route::get('/writers/{writer}', [WritersController::class, 'getWriterArticles'])->name('writerArticles');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/popular', [PopularController::class, 'index'])->name('popular');
