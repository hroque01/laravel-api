<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])
    ->name('home');
Route::get('/movie/all', [MainController::class, 'movieAll'])
    ->name('movie.all');