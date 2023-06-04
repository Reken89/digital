<?php

namespace App\Structure\ShopSection\Admin\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Structure\ShopSection\Admin\Models\Category;
use App\Structure\BasketSection\User\Models\Basket;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    use HasFactory;
    protected $table = 'clothes';
    
    protected $guarded = [];
    
    public $timestamps = false;
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    public function basket(): HasMany
    {
        return $this->hasMany(Basket::class);
    } 

}

