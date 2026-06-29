<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Получение списка всех жанров.
     *
     * Endpoint: GET /api/genres
     */
    public function index(): Response
    {
        return response()->noContent();
    }

    /**
     * Редактирование жанра.
     *
     * Endpoint: PATCH /api/genres/{genre}
     */
    public function update(Request $request, int $genreId): Response
    {
        return response()->noContent();
    }
}
