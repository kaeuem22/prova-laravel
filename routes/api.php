<?php

use App\Http\Controllers\apiEmployeeController;
use Illuminate\Support\Facades\Route;

Route::apiResource('employees', apiEmployeeController::class);