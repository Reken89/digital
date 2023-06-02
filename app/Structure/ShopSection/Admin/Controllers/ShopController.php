<?php

namespace App\Structure\ShopSection\Admin\Controllers;

use App\Core\Controllers\Controller;

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
    
}

