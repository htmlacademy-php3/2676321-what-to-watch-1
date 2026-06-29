<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

abstract class BaseResponse implements Responsable
{
    public function __construct(
        protected array|Arrayable $data = [],
        public int $statusCode = Response::HTTP_OK,
    ) {}

    /**
     * Формирует JSON-ответ для клиента.
     */
    public function toResponse($request): JsonResponse
    {
        return response()->json($this->payload(), $this->statusCode);
    }

    /**
     * Преобразует данные к массиву.
     */
    protected function toArray(): array
    {
        if ($this->data instanceof Arrayable) {
            return $this->data->toArray();
        }

        return $this->data;
    }

    /**
     * Формирует содержимое ответа.
     */
    abstract protected function payload(): ?array;
}
