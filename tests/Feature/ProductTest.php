<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Product;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_open_product_page()
    {
        $response = $this->get('/dashboard/products');

        $response->assertStatus(200);
        $response->assertSee('Daftar Barang');
    }

    public function test_one_product_on_product_page(){
        $response = $this->get('/dashboard/products');

        $response->assertStatus(200);
        $response->assertSee('Cincin');
    }

    public function test_create_product(){
        $product = Product::create([
            'NamaProduct' => 'Test Create Product',
            'Deskripsi' => 'Digunakan untuk test code',
            'Stock' => '15',
            'Harga' => '11000',
            'Gambar' => 'Test Code',
        ]);

        $response = $this->get('/dashboard/products');
        $response->assertStatus(200);
        $response->assertSee('Test Create Product');
        $response->assertSee('15');
        $response->assertSee('11000');

    }

    public function test_edit_product(){
        $product = Product::where('NamaProduct', 'Test Create Product')->update(['NamaProduct' => 'Test Edit Product', 'Stock' => 10]);
        $response = $this->get('/dashboard/products');
        $response->assertStatus(200);
        $response->assertSee('Test Edit Product');
        $response->assertSee('10');
        $response->assertSee('11000');
    }

    public function test_delete_product(){
        $product = Product::where('NamaProduct', 'Test Edit Product')->delete();

        $response = $this->get('/dashboard/products');
        $response->assertStatus(200);
        $response->assertDontSee('Test Edit Product');
    }
}
