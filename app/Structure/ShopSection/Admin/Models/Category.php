<?php

namespace App\Structure\ShopSection\Admin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Structure\ShopSection\Admin\Models\Clothes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    
    protected $guarded = [];
    
    public $timestamps = false;
    
    public function clothes(): HasMany
    {
        return $this->hasMany(Clothes::class);
    }    
    
}
