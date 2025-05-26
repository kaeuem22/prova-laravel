<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('authors', AuthorController::class);
Route::resource('genre', GenreController::class);
Route::resource('employee', EmployeeController::class);
Route::resource('books', BookController::class);