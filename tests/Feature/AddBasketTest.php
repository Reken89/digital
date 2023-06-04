<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AddBasketTest extends TestCase
{
    /**
     * Проверяем возможность добавления товара в корзину
     *
     * @return 200
     */
    public function test_example()
    {        
        Auth::loginUsingId(1);   
        
        $test = $this->call('GET', '/purchase/', [
            'id'          => 1,
            'clothes_id'  => 4,
        ]);
        
        $test->assertStatus(200);

    }
}
