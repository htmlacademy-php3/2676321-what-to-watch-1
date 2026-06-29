<?php

namespace App\Http\Controllers;

use App\Http\Responses\SuccessResponse;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Получение списка фильмов с пагинацией и фильтрацией.
     *
     * Endpoint: GET /api/films
     */
    public function index(Request $request): SuccessResponse
    {
        return new SuccessResponse;
    }

    /**
     * Получение информации о данном фильме.
     *
     * Endpoint: GET /api/films/{id}
     */
    public function show(int $filmId): SuccessResponse
    {
        return new SuccessResponse;
    }

    /**
     * Добавление нового фильма в базу (только для модератора).
     *
     * Endpoint: POST /api/films
     */
    public function store(Request $request): SuccessResponse
    {
        return new SuccessResponse;
    }

    /**
     * Редактирование фильма.
     *
     * Endpoint: PATCH /api/films/{id}
     */
    public function update(Request $request, int $filmId): SuccessResponse
    {
        return new SuccessResponse;
    }

    /**
     * Получение списка похожих фильмов.
     *
     * Endpoint: GET /api/films/{id}/similar
     */
    public function similar(int $filmId): SuccessResponse
    {
        return new SuccessResponse;
    }
}
