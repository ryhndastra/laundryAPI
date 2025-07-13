<?php

use Illuminate\Support\Facades\Route;


Route::get('/promo', [App\Http\Controllers\api\PromoController::class, 'readAll']);

