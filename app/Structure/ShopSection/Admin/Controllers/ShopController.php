<?php

namespace App\Structure\ShopSection\Admin\Controllers;

use App\Structure\ShopSection\Admin\Requests\ClothesUploadRequest;
use App\Structure\ShopSection\Admin\Dto\ClothesUploadDto;
use App\Structure\ShopSection\Admin\Actions\ClothesAddAction;
use App\Core\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Показывваем панель администратора
     *
     * @param 
     * @return view
     */
    public function panel()
    {       
        return view('adminpanel');
    }
    
    /**
     * Принимаем информацию о новом товаре
     *
     * @param ClothesUploadRequest $request
     * @return 
     */
    public function upload(ClothesUploadRequest $request)
    {   
        //Выпоняем типизацию данных
        //Передаем типизацию в action для дальнейшей обработки
        $dto = ClothesUploadDto::fromRequest($request);
        $status = $this->action(ClothesAddAction::class)->run($dto);
        
        //Возвращаем результат, true или false
        return $status;       

    }   
    
}

