<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\PromoController;
use App\Http\Controllers\api\ShopController;
use App\Http\Controllers\api\LaundryController;

Route::get('/user', [UserController::class, 'readAll']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    // promo
    Route::get('/promo/limit', [PromoController::class, 'readLimit']);

    // shop
    Route::get('/shop/recommendation/limit', [ShopController::class, 'readRecommendationLimit']);
    Route::get('/shop/search/city/{name}', [ShopController::class, 'searchByCity']);

    // laundry
    Route::get('/laundry/user/{id}', [LaundryController::class, 'whereUserId']);
    Route::post('/laundry/claim', [LaundryController::class, 'claimLaundry']);
});
