<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Получение профиля пользователя.
     *
     * Endpoint: GET /api/user
     */
    public function show(Request $request): Response
    {
        return response()->noContent();
    }

    /**
     * Обновление профиля пользователя.
     *
     * Endpoint: PATCH /api/user
     */
    public function update(Request $request): Response
    {
        return response()->noContent();
    }
}
