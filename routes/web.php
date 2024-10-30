<?php

use App\Http\Controllers\ActorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PublicController;

// Route Public
Route::get('/', [PublicController::class, 'homepage'])->name('home'); // Home
Route::get('/FAQs', [PublicController::class, 'faq'])->name('faq'); // FAQ

// Route Films
Route::get('/insert-film', [FilmController::class, 'create'])->middleware('auth')->name('filmCreate'); // Films
Route::get('/tutti-i-films', [FilmController::class, 'index'])->name('filmIndex'); // Films
Route::post('/store', [FilmController::class, 'store'])->middleware('auth')->name('filmStore'); // Films
Route::get('/film/detail/{film}', [FilmController::class, 'show'])->name('filmShow'); // Films
Route::get('/film/edit/{film}', [FilmController::class, 'edit'])->middleware('auth')->name('film.edit'); // Films
Route::put('/film/update/{film}', [FilmController::class, 'update'])->middleware('auth')->name('film.update'); // Films
Route::delete('/film/delete/{film}', [FilmController::class, 'destroy'])->middleware('auth')->name('film.destroy'); // Films

// Route Revisor
Route::get('/revisor/all-films', [FilmController::class, 'revisorIndex'])->middleware('auth')->name('revisorIndex'); // Revisor

// Route Profilo
Route::get('/profile', [PublicController::class, 'profile'])->middleware('auth')->name('profile'); // Profile
