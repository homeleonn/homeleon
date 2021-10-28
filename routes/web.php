<?php

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}', [UserController::class, 'info']);
