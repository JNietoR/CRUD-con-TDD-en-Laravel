<?php

namespace Tests\Feature\Http\Controllers\ProductController\Feture;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Product;
class IndexTest extends TestCase
{
    use RefreshDatabase;
    public function test_list()
    {
        $product = Product::factory()->create();

        $this->get(route('products.index'))
        ->assertStatus(200)
        ->assertSee($product->name);

        
    }
    public function test_empty()
    {
        $this
        ->get(route('products.index'))
        ->assertStatus(200)
        ->assertSee('No hay productos registrados');

    }
}
