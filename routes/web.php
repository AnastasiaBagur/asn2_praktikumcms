<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// Rute untuk halaman utama langsung ke daftar artikel
Route::get('/', [ArticleController::class, 'index']);

// Rute untuk resource Article (CRUD)
Route::resource('articles', ArticleController::class);
