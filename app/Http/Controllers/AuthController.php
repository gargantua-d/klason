<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function login(Request $request, User $user)
    {
        if (!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return response()->json(['error' => 'salah'], 401);
        }

        $user = $user->find(Auth::user()->id);
        $user = [
            'token' => $user->api_token
        ];
        return response()->json($user);
    }
}
