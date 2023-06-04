<?php

namespace App\Structure\BasketSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\BasketSection\User\Models\Basket;
use App\Structure\BasketSection\User\Dto\BasketDeleteDto;

class BasketDeleteAction extends BaseAction
{
    /**
     * Удаляем товар из таблицы basket
     * 
     * @param BasketDeleteDto $dto
     * @return bool
     */
    public function run(BasketDeleteDto $dto): bool
    {   
        
        //Удаляем запись
        $result = Basket::where('id', $dto->id)->delete();
        
        //Если удаление прошло успешно возвращаем true
        //Если удаление не получилась возвращаем false
        return $result == true ? true : false;  

    }
}

