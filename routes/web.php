<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::get('/insert-film', [FilmController::class, 'create'])->name('create');
Route::get('/tutti-i-films', [FilmController::class, 'index'])->name('index');

Route::post('/store', [FilmController::class, 'store'])->name('store');
