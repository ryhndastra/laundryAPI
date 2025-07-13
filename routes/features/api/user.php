<?php

use Illuminate\Support\Facades\Route;


Route::get('/user', [App\Http\Controllers\api\UserController::class, 'readAll']);
