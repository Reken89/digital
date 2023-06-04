<?php

namespace App\Structure\BasketSection\User\Controllers;

use App\Core\Controllers\Controller;
use App\Structure\BasketSection\User\Requests\BasketAddRequest;
use App\Structure\BasketSection\User\Requests\BasketDeleteRequest;
use App\Structure\BasketSection\User\Dto\BasketAddDto;
use App\Structure\BasketSection\User\Dto\BasketDeleteDto;
use App\Structure\BasketSection\User\Actions\BasketAddAction;
use App\Structure\BasketSection\User\Actions\BasketDeleteAction;

class BasketController extends Controller
{       
    /**
     * Принимаем товар в корзину
     *
     * @param BasketAddRequest $request
     * @return view
     */
    public function add(BasketAddRequest $request)
    {   
        //Выпоняем типизацию данных
        //Передаем типизацию в action для дальнейшей обработки
        $dto = BasketAddDto::fromRequest($request);
        $status = $this->action(BasketAddAction::class)->run($dto);
        
        //Если результат true, возврвщаем шаблон
        if ($status == true){
            return view('shop');
        }
         
    }
    
    /**
     * Удаляем товар из корзины
     *
     * @param BasketDeleteRequest $request
     * @return view
     */
    public function delete(BasketDeleteRequest $request)
    {   
        //Выпоняем типизацию данных
        //Передаем типизацию в action для дальнейшей обработки
        $dto = BasketDeleteDto::fromRequest($request);
        $status = $this->action(BasketDeleteAction::class)->run($dto);
        
        //Если результат true, возврвщаем шаблон
        if ($status == true){
            return view('shop');
        }
         
    }
    
}
