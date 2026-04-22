<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_owner_can_delete_product()
    {
        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
        $user = User::factory()->create(['role' => 'seller']);
        $product = Product::create([
            'user_id' => $user->id,
            'title' => 'Test Product',
            'description' => 'Test Description',
            'price' => 100,
        ]);

        $response = $this->actingAs($user)->delete("/products/{$product->id}");

        $response->assertRedirect('/products');
        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }

    public function test_non_owner_cannot_delete_product()
    {
        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
        $owner = User::factory()->create(['role' => 'seller']);
        $nonOwner = User::factory()->create(['role' => 'seller']);
        $product = Product::create([
            'user_id' => $owner->id,
            'title' => 'Test Product',
            'description' => 'Test Description',
            'price' => 100,
        ]);

        $response = $this->actingAs($nonOwner)->delete("/products/{$product->id}");

        $response->assertStatus(403);
        $this->assertDatabaseHas('products', ['id' => $product->id]);
    }
}
