<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});


Route::resource('/classes', ClassController::class);
Route::resource('/students', StudentController::class);
