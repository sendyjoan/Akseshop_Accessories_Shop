<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;


class BarangTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_open_page_product()
    {
        $response = $this->get('/barang');

        $response->assertStatus(200);
    }

    public function test_create_product()
    {
       

      
        $product = Product::create([
        'NamaProduct' => 'Gelang',
        'Deskripsi' => 'lorem ipsun',
        'Stock' => '40',
        'Harga'=> '40000',
        'Gambar'=>'gambarTest']);


        $response = $this->get('/dashboard/barang');
        $response->assertSee(200);

    }

    public function test_read_product()
    {
        $response = $this->get('/dashboard/barang');
        $response->assertSee(200);
    }
    
    public function test_update_poduct(){

      
    
        $product = Product::where('NamaProduct','Gelang')->update([
            'Stock' => '50',
           ]);

            $response = $this->get('/dashboard/barang');
            $response->assertSee(200);

    }

   public function test_delete_product(){
       
    
        $product = Product::where('NamaProduct','Gelang')->delete();
        $response = $this->get('/dashboard/barang');
        $response->assertDontSee('Gelang');
        $response->assertSee(200);

   }



   
}
