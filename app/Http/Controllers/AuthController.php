<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Responses\SuccessResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function login(LoginRequest $request): SuccessResponse
    {
        if (! Auth::attempt($request->validated())) {
            abort(401, trans('auth.failed'));
        }

        $token = Auth::user()->createToken('auth-token');

        return new SuccessResponse([
            'token' => $token->plainTextToken,
        ]);
    }

    /**
     * Выход из системы.
     *
     * Endpoint: POST /api/logout
     */
    public function logout(Request $request): SuccessResponse
    {
        $request->user()->tokens()->delete();

        return new SuccessResponse;
    }
}
