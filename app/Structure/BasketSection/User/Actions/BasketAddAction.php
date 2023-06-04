<?php

namespace App\Structure\BasketSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\BasketSection\User\Models\Basket;
use App\Structure\BasketSection\User\Dto\BasketAddDto;

class BasketAddAction extends BaseAction
{
    /**
     * Добавляет товар в таблицу basket
     * 
     * @param BasketAddDto $dto
     * @return bool
     */
    public function run(BasketAddDto $dto): bool
    {   
        
        //Записываем информация о товаре в таблицу
        $result = Basket::create([
            'user_id'    => $dto->id,
            'clothes_id' => $dto->clothes_id,
        ]);
        
        //Если запись прошла успешно возвращаем true
        //Если запись не получилась возвращаем false
        return $result == true ? true : false;  

    }
}

