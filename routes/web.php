<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('todos', controller: \App\Http\Controllers\TodoController::class);
Route::get('todos/{todo}', [\App\Http\Controllers\TodoController::class, 'destroy'])->name('todos.destroy');
