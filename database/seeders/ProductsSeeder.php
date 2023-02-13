<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Lg Mobile',
                'price'=>'10000',
                "description"=>"a smartphone with 4gb ram and much more feature",
                'category'=>'mobile',
                "gallery"=>"https://www.lg.com/in/images/mobile-phones/md06155776/gallery/D-01_v.jpg",
            ],
            [
                'name'=>'iPhone 11 ',
                'price'=>'60000',
                "description"=>"a smartphone with 64gb rom and much more feature",
                'category'=>'mobile',
                "gallery"=>"https://d28i4xct2kl5lp.cloudfront.net/product_images/78877_cbe0138e-899f-457b-b3a9-423b8fac2599.jpg",
            ],
            [
                'name'=>'iPhone 13 Pro',
                'price'=>'80000',
                "description"=>"a smartphone with 6gb ram and much more feature",
                'category'=>'mobile',
                "gallery"=>"https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6443/6443219_sd.jpg",
            ],
            [
                'name'=>'Google Pixel 5',
                'price'=>'10000',
                "description"=>"a smartphone with 128gb rom and much more feature",
                'category'=>'mobile',
                "gallery"=>"https://brain-images-ssl.cdn.dixons.com/5/1/10215415/l_10215415.jpg",
            ]
        ]);
    }
}
