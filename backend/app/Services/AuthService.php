<?php

namespace App\Services;

class AuthService
{
    public static function checkUserLogin($request)
    {
        $isValid = $request['email'] == 'admin@example.com' && $request['password'] == 'pass';
        return [
            'isValid' => $isValid
        ];
    }
}
