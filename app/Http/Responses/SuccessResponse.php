<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Arrayable;
use Symfony\Component\HttpFoundation\Response;

class SuccessResponse extends BaseResponse
{
    public function __construct(
        array|Arrayable $data = [],
        int $statusCode = Response::HTTP_OK,
    ) {
        parent::__construct($data, $statusCode);
    }

    /**
     * Формируем ответ согласно формату API.
     */
    protected function payload(): ?array
    {
        return [
            'data' => $this->toArray(),
        ];
    }
}
