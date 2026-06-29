<?php

namespace App\Http\Controllers;

use App\Http\Responses\SuccessResponse;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Получение списка всех жанров.
     *
     * Endpoint: GET /api/genres
     */
    public function index(): SuccessResponse
    {
        return new SuccessResponse;
    }

    /**
     * Редактирование жанра.
     *
     * Endpoint: PATCH /api/genres/{genre}
     */
    public function update(Request $request, int $genreId): SuccessResponse
    {
        return new SuccessResponse;
    }
}
