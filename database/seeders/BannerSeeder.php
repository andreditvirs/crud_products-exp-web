<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    public function run()
    {
        $banners = [
            ["products_name" => "Produk 1", "url_image" => "images/products/1_1.jpg"],
            ["products_name" => "Produk 2", "url_image" => "images/products/2_1.jpg"],
            ["products_name" => "Produk 3", "url_image" => "images/products/3_1.jpg"],
            ["products_name" => "Produk 1", "url_image" => "images/products/1_2.jpg"]
        ];

        foreach($banners as $banner){
            $banner = (object) $banner;
            $new_banner = new Banner;
            $new_banner->products_id = Product::where('name', $banner->products_name)->first()->id;
            $new_banner->url_image = $banner->url_image;
            $new_banner->save();
        }
    }
}
