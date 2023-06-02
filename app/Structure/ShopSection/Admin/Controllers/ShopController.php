<?php

namespace App\Structure\ShopSection\Admin\Controllers;

use App\Structure\ShopSection\Admin\Requests\ClothesUploadRequest;
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
        //$path = $request->file('image')->store('uploads', 'public');
        //$path = '/storage/' . $path;

    }
    
}

