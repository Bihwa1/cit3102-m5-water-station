<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

#Step 5
#PUBLIC ROUTES
Route::post('/register', [StationController::class, 'register']);
Route::post('/login', [StationController::class, 'login']);

#PROTECTED ROUTES
Route::middleware('auth:sanctum')->group(function () {
    #Step 3
    Route::get('/water-stations', [StationController::class, 'index']);
    Route::post('/water-stations', [StationController::class, 'store']);
    Route::get('/water-stations/{id}', [StationController::class, 'show']);
    Route::put('/water-stations/{id}', [StationController::class, 'update']);
    Route::delete('/water-stations/{id}', [StationController::class, 'destroy']);


    #Step 5.1
    Route::post('/logout', [StationController::class, 'logout']);
    Route::get('/me', [StationController::class, 'me']);
});
