<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ChampionshipController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TrackController;
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

Route::apiResource('/teams', TeamController::class);
Route::apiResource('/drivers', DriverController::class);
Route::apiResource('/cars', CarController::class);
Route::apiResource('/tracks', TrackController::class);
Route::get('/championships/{year}', [ChampionshipController::class, 'showByYear']);
Route::apiResource('/championships', ChampionshipController::class);