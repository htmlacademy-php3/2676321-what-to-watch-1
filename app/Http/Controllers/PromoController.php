<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PromoController extends Controller
{
    /**
     * Получение текущего промо-фильма.
     *
     * Endpoint: GET /api/promo
     */
    public function show(): Response
    {
        return response()->noContent();
    }

    /**
     * Установка промо-фильма.
     *
     * Endpoint: POST /api/promo/{id}
     */
    public function store(int $id): Response
    {
        return response()->noContent();
    }
}
