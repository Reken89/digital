<?php

namespace App\Structure\ShopSection\Admin\Models;

use App\Structure\ShopSection\Admin\Models\Category;
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

}

