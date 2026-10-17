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

#TESTING
#Route::get('/water-stations', [StationController::class, 'index']); 
#Route::get('/users', [StationController::class, 'index']); 


#PROTECTED ROUTES
Route::middleware('auth:sanctum')->group(function () {
    #Step 3

    #GET registered users, gawa ko lang yan
    Route::get('/users', [StationController::class, 'index']); 
    
    #GET registered customers
    Route::get('/water-stations', [StationController::class, 'index']);

    # creates customer
    Route::post('/water-stations', [StationController::class, 'store']);

    #
    Route::get('/water-stations/{water_station}', [StationController::class, 'show']);
    Route::put('/water-stations/{water_station}', [StationController::class, 'update']);
    Route::delete('/water-stations/{water_station}', [StationController::class, 'destroy']);


    #Step 5.1
    Route::post('/logout', [StationController::class, 'logout']);
    Route::get('/me', [StationController::class, 'me']);
});
