<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('api/users', [UserController::class, ('index')]);
Route::get('api/user/{id}', [UserController::class, ('show')]);
Route::post('api/users', [UserController::class,('store')]);