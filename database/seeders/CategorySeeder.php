<?php

namespace Database\Seeders;

use App\Structure\ShopSection\Admin\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Jeans',
            ],
            [
                'name' => 'Bags',
            ],
            [
                'name' => 'Shoes',
            ],
        ]);
     
    }
}
