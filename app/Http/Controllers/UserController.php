<?php

namespace App\Http\Controllers;

use App\Http\Responses\SuccessResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Получение профиля пользователя.
     *
     * Endpoint: GET /api/user
     */
    public function show(Request $request): SuccessResponse
    {
        return new SuccessResponse;
    }

    /**
     * Обновление профиля пользователя.
     *
     * Endpoint: PATCH /api/user
     */
    public function update(Request $request): SuccessResponse
    {
        return new SuccessResponse;
    }
}
