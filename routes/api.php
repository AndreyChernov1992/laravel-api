<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\Api\V1\ApiController;
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

Route::resource('racers', MainController::class);

Route::get('/racers', [ApiController::class, 'index']);

Route::get('/racers/xml', [ApiController::class, 'xml']);

Route::get('/racers/json', [ApiController::class, 'index']);