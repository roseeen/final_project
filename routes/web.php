<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TodoController;

Route::middleware(['auth'])->group(function () {
    Route::resource('todos', TodoController::class);
});
