<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\TestController1;
use Illuminate\Support\Facades\Route;



Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
