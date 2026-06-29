<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FavoriteController extends Controller
{
    /**
     * Получение списка избранных фильмов пользователя.
     *
     * Endpoint: GET /api/favorite
     */
    public function index(Request $request): Response
    {
        return response()->noContent();
    }

    /**
     * Добавление фильма в избранное.
     *
     * Endpoint: POST /api/films/{id}/favorite
     */
    public function store(int $filmId): Response
    {
        return response()->noContent();
    }

    /**
     * Удаление фильма из избранного.
     *
     * Endpoint: DELETE /api/films/{id}/favorite
     */
    public function destroy(int $filmId): Response
    {
        return response()->noContent();
    }
}
