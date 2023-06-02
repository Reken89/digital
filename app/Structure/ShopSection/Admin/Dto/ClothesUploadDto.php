<?php

namespace App\Structure\ShopSection\Admin\Dto;

use App\Structure\ShopSection\Admin\Requests\ClothesUploadRequest;
use Illuminate\Http\UploadedFile;
use App\Core\Dto\BaseDto;

class ClothesUploadDto extends BaseDto
{
    public UploadedFile $image;
    public float        $price;
    public string       $name;
    public string       $description;
    public int          $size;
    public int          $category;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param ClothesUploadRequest $request
     * @return 
     */
    public static function fromRequest(ClothesUploadRequest $request): self
    {
        return new self([
            'image'       => $request->file('image'),
            'price'       => $request->get('price'),
            'name'        => $request->get('name'),
            'description' => $request->get('description'),
            'size'        => $request->get('size'),
            'category'    => $request->get('category'),
        ]);
    }
}

