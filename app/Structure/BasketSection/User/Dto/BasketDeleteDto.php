<?php

namespace App\Structure\BasketSection\User\Dto;

use App\Structure\BasketSection\User\Requests\BasketDeleteRequest;
use App\Core\Dto\BaseDto;

class BasketDeleteDto extends BaseDto
{
    public int          $id;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param BasketDeleteRequest $request
     * @return 
     */
    public static function fromRequest(BasketDeleteRequest $request): self
    {
        return new self([
            'id' => $request->get('id'),
        ]);
    }
}
