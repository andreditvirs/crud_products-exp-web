<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            ["name" => "Produk 1", "price" => 1000],
            ["name" => "Produk 2", "price" => 2000],
            ["name" => "Produk 3", "price" => 3000]
        ];

        foreach($products as $product){
            $product = (object) $product;
            $new_product = new Product;
            $new_product->name = $product->name;
            $new_product->price = $product->price;
            $new_product->save();
        }
    }
}
