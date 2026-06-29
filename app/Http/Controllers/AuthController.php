<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Регистрация пользователя.
     *
     * Endpoint: POST /api/register
     */
    public function register(Request $request): Response
    {
        return response()->noContent();
    }

    /**
     * Авторизация пользователя.
     *
     * Endpoint: POST /api/login
     */
    public function login(Request $request): Response
    {
        return response()->noContent();
    }

    /**
     * Выход из системы.
     *
     * Endpoint: POST /api/logout
     */
    public function logout(Request $request): Response
    {
        return response()->noContent();
    }
}
