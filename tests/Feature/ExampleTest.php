<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_home()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_products()
    {
        $response = $this->get('/products');

        $response->assertStatus(404);
    }
}
