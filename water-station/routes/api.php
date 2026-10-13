<?php

use App\Models\WaterStation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\StationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/WaterStations', [StationController::class,'index']);
Route::post('/WaterStations', [StationController::class,'store']);
Route::get('/WaterStations/{id}', [StationController::class,'show']);
Route::put('/WaterStations/{id}', [StationController::class,'update']);
Route::delete('/WaterStations/{id}', [StationController::class,'destroy']);


