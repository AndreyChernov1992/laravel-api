<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home']);

Route::get('/report', [MainController::class, 'report']);

Route::get('/report/drivers', [MainController::class, 'drivers']);

Route::get('/report/drivers/{driver_id}', [MainController::class, 'racer']) -> name('racer');
