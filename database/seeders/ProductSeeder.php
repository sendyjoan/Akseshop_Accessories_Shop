<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'namaproduct' => 'Product Tes 1',
                'deskripsi' => Str::random(75),
                'stock' => 10,
                'harga' => 50000,
                'gambar' => 'gambar',
            ],
            [
                'namaproduct' => 'Product Tes 2',
                'deskripsi' => Str::random(75),
                'stock' => 10,
                'harga' => 50000,
                'gambar' => 'gambar',
            ],
            [
                'namaproduct' => 'Product Tes 3',
                'deskripsi' => Str::random(75),
                'stock' => 10,
                'harga' => 50000,
                'gambar' => 'gambar',
            ]
        ]);
    }
}
