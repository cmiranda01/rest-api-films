<?php

use Illuminate\Support\Facades\Route;

Route::get('/films', [\App\Http\Controllers\FilmsController::class, 'index']);
Route::get('/{id}', [\App\Http\Controllers\FilmsController::class, 'show']);


