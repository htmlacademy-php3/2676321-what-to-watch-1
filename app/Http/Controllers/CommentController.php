<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    /**
     * Получение списка комментариев к данному фильму.
     *
     * Endpoint: GET /api/comments/{id}
     */
    public function index(int $filmId): Response
    {
        return response()->noContent();
    }

    /**
     * Добавление комментария к данному фильму.
     *
     * Endpoint: POST /api/comments/{id}
     */
    public function store(Request $request, int $filmId): Response
    {
        return response()->noContent();
    }

    /**
     * Редактирование комментария.
     *
     * Endpoint: PATCH /api/comments/{comment}
     */
    public function update(Request $request, int $commentId): Response
    {
        return response()->noContent();
    }

    /**
     * Удаление комментария.
     *
     * Endpoint: DELETE /api/comments/{comment}
     */
    public function destroy(int $commentId): Response
    {
        return response()->noContent();
    }
}
