<?php

namespace App\Http\Controllers;

use App\Http\Responses\SuccessResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Регистрация пользователя.
     *
     * Endpoint: POST /api/register
     */
    public function register(Request $request): SuccessResponse
    {
        return new SuccessResponse;
    }

    /**
     * Авторизация пользователя.
     *
     * Endpoint: POST /api/login
     */
    public function login(Request $request): SuccessResponse
    {
        return new SuccessResponse;
    }

    /**
     * Выход из системы.
     *
     * Endpoint: POST /api/logout
     */
    public function logout(Request $request): SuccessResponse
    {
        return new SuccessResponse;
    }
}
