<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::middleware(['auth'])->group(function () {
    Route::resource('todos', TodoController::class);
});
