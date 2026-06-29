<?php

namespace App\Http\Controllers;

use App\Http\Responses\SuccessResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Получение списка комментариев к данному фильму.
     *
     * Endpoint: GET /api/comments/{id}
     */
    public function index(int $filmId): SuccessResponse
    {
        return new SuccessResponse;
    }

    /**
     * Добавление комментария к данному фильму.
     *
     * Endpoint: POST /api/comments/{id}
     */
    public function store(Request $request, int $filmId): SuccessResponse
    {
        return new SuccessResponse;
    }

    /**
     * Редактирование комментария.
     *
     * Endpoint: PATCH /api/comments/{comment}
     */
    public function update(Request $request, int $commentId): SuccessResponse
    {
        return new SuccessResponse;
    }

    /**
     * Удаление комментария.
     *
     * Endpoint: DELETE /api/comments/{comment}
     */
    public function destroy(int $commentId): SuccessResponse
    {
        return new SuccessResponse;
    }
}
