<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Products;
use PHPUnit\Framework\Attributes\Test;

class ProductApiTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_can_create_a_product_via_api()
    {
        // البيانات اللي هنبعتها
        $data = [
            'name' => 'Test Product',
            'price' => 99.99,
            'stock' => 10,
        ];

        // استدعاء API POST /api/products
        $response = $this->postJson('/api/products', $data);

        // التحقق من الاستجابة
        $response->assertStatus(201)
                 ->assertJson([
                     'message' => 'Product created successfully',
                     'product' => [
                         'name' => 'Test Product',
                         'price' => 99.99,
                         'stock' => 10,
                     ],
                 ]);

        // التحقق إن المنتج اتخزن في قاعدة البيانات
        $this->assertDatabaseHas('products', [
            'name' => 'Test Product',
            'price' => 99.99,
            'stock' => 10,
        ]);
    }
}
