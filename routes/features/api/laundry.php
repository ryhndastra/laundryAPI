<?php

use Illuminate\Support\Facades\Route;

Route::get('/laundry', [App\Http\Controllers\api\LaundryController::class, 'readAll']);
