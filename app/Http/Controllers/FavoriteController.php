<?php

namespace App\Http\Controllers;

use App\Http\Responses\SuccessResponse;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Получение списка избранных фильмов пользователя.
     *
     * Endpoint: GET /api/favorite
     */
    public function index(Request $request): SuccessResponse
    {
        return new SuccessResponse;
    }

    /**
     * Добавление фильма в избранное.
     *
     * Endpoint: POST /api/films/{id}/favorite
     */
    public function store(int $filmId): SuccessResponse
    {
        return new SuccessResponse;
    }

    /**
     * Удаление фильма из избранного.
     *
     * Endpoint: DELETE /api/films/{id}/favorite
     */
    public function destroy(int $filmId): SuccessResponse
    {
        return new SuccessResponse;
    }
}
