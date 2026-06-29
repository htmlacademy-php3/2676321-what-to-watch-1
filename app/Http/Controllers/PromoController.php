<?php

namespace App\Http\Controllers;

use App\Http\Responses\SuccessResponse;

class PromoController extends Controller
{
    /**
     * Получение текущего промо-фильма.
     *
     * Endpoint: GET /api/promo
     */
    public function show(): SuccessResponse
    {
        return new SuccessResponse;
    }

    /**
     * Установка промо-фильма.
     *
     * Endpoint: POST /api/promo/{id}
     */
    public function store(int $id): SuccessResponse
    {
        return new SuccessResponse;
    }
}
