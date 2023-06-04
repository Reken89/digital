<?php

namespace App\Structure\BasketSection\User\Models;

use App\Structure\ShopSection\Admin\Models\Clothes;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;
    protected $table = 'basket';
    
    protected $guarded = [];
    
    public $timestamps = false;
    
    //Определение обратной связи один ко многим (к таблице clothes)
    public function clothes()
    {
        return $this->belongsTo(Clothes::class, 'clothes_id');
    }
    
    //Определение обратной связи один ко многим (к таблице users)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}

