<?php

namespace Tests\Feature\Feature\Http\Controlerrs\ProductController;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateTest extends TestCase
{
    
    public function test_form()
    {
        //ruta del formulario con los metodos del ProductController products.create para crear y products.store guardar los datos
        $this->get(route('products.create'))
        ->assertStatus(200)
        ->assertStatus(route('products.store'));

        
    }
}
