<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// creamos la ruta que irá al controlador filmscontroller donde obtenemos las peliculas paginadas
Route::get('/films', [\App\Http\Controllers\FilmsController::class, 'index']);
// obtenemos el detalle completo de la pelicula con todas las imagenes en esta ruta
Route::get('/{id}', [\App\Http\Controllers\FilmsController::class, 'show']);
