<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// Rute untuk halaman welcome
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk resource Article
Route::resource('articles', ArticleController::class);