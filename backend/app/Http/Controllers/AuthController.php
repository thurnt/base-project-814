<?php

namespace App\Http\Controllers;

use App\Services\ApiResponseService;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (AuthService::checkUserLogin($credentials)['isValid']) {
            return ApiResponseService::success([
                'token' => '$token',
                'user' => 'Administrator'
            ], "Login successful");
        }

        return ApiResponseService::error("Failed to login");
    }

    public function processLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (AuthService::checkUserLogin($credentials)['isValid']) {
            $token = '$token';

            Session::put('api_token', $token);

            return redirect()->route('dashboard');
        }

        return redirect()->back()->withErrors(['login' => 'Invalid credentials']);
    }

    public function dashboard()
    {

        if (!Session::has('api_token')) {
            return redirect()->route('login');
        }
        $user = ['name' => 'Administrator'];

        return view('dashboard', compact('user'));
    }

    public function logout()
    {
        // Clear the API token from the session
        Session::forget('api_token');

        // Redirect to login page
        return redirect()->route('login');
    }
}
