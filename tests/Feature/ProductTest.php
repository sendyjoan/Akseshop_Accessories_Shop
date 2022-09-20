<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_open_home_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_product_home_page(){
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Cincin');
    }
}
