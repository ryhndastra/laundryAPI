<?php

use Illuminate\Support\Facades\Route;


Route::get('/shop', [App\Http\Controllers\api\ShopController::class, 'readAll']);
