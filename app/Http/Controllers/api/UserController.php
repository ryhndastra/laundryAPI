<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    use ValidatesRequests;

    public function readAll()
    {
        $users = User::all();

        return response()->json([
            'data' => $users
        ], 200);
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|min:6|unique:users',
            'email'    => 'required|email|unique:users',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[^A-Za-z0-9]/'
            ],
        ], [
            'password.regex' => 'Password harus mengandung minimal 1 huruf besar, 1 angka, dan 1 simbol.'
        ]);

        $user = User::create([
            'username' => $request->username,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'message' => 'Registrasi berhasil.',
            'data'    => $user
        ], 201);
    }
}
