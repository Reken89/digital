<?php

namespace App\Structure\BasketSection\User\Dto;

use App\Structure\BasketSection\User\Requests\BasketAddRequest;
use App\Core\Dto\BaseDto;

class BasketAddDto extends BaseDto
{
    public int          $id;
    public int          $clothes_id;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param BasketAddRequest $request
     * @return 
     */
    public static function fromRequest(BasketAddRequest $request): self
    {
        return new self([
            'id'         => $request->get('id'),
            'clothes_id' => $request->get('clothes_id'),
        ]);
    }
}