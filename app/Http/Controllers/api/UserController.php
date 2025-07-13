<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function readAll(){
        $users = User::all();
        return response()->json([
            'data' => $users
        ],200);
    }
}
