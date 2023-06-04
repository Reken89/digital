<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class ExaminationAdminPanelTest extends TestCase
{
    /**
     * Проверяем, что админ-панель, доступна только администратору
     *
     * @return 200
     */
    public function test_example()
    {        
        Auth::loginUsingId(1);   
        
        $test = $this->get('/admin/panelshop');

        $test->assertStatus(200);

    }
}
