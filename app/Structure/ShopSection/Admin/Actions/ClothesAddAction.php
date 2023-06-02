<?php

namespace App\Structure\ShopSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\ShopSection\Admin\Models\Clothes;
use App\Structure\ShopSection\Admin\Dto\ClothesUploadDto;

class ClothesAddAction extends BaseAction
{
    /**
     * Добавляет информацию об вещи в таблицу Clothes
     * 
     * @param ClothesUploadDto $dto
     * @return bool
     */
    public function run(ClothesUploadDto $dto): bool
    {   
        //Загружаем изображение вещи в каталог public
        //Подготавливаем ссылку на изображение для записи в таблицу clothes
        //$path = $request->file('image')->store('uploads', 'public');
        $path = $dto->image->store('uploads', 'public');
        $link = '/storage/' . $path;
        
        //Записываем информация об вещи в таблицу
        $result = Clothes::create([
            'category_id' => $dto->category,
            'name'        => $dto->name,
            'price'       => $dto->price,
            'description' => $dto->description,
            'size'        => $dto->size,
            'link'        => $link,
        ]);
        
        //Если запись прошла успешно возвращаем true
        //Если запись не получилась возвращаем false
        return $result == true ? true : false;  

    }
}

