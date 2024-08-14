<?php

namespace App\Http\Controllers;

use App\Services\ApiResponseService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($credentials['email'] == 'admin@example.com' && $credentials['password'] == 'pass') {
            return ApiResponseService::success([
                'token' => '$token',
                'user' => 'Administrator'
            ], "Login successful");
        }

        return ApiResponseService::error("Failed to login");
    }
}
