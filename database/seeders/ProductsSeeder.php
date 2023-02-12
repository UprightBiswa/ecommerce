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
                'name'=>'Lg Mobile',
                'price'=>'10000',
                "description"=>"a smartphone with 4gb ram and much more feature",
                'category'=>'mobile',
                "gallery"=>"https://www.lg.com/in/images/mobile-phones/md06155776/gallery/D-01_v.jpg",
            ],
            [
                'name'=>'Lg Mobile',
                'price'=>'10000',
                "description"=>"a smartphone with 4gb ram and much more feature",
                'category'=>'mobile',
                "gallery"=>"https://www.lg.com/in/images/mobile-phones/md06155776/gallery/D-01_v.jpg",
            ],
            [
                'name'=>'Lg Mobile',
                'price'=>'10000',
                "description"=>"a smartphone with 4gb ram and much more feature",
                'category'=>'mobile',
                "gallery"=>"https://www.lg.com/in/images/mobile-phones/md06155776/gallery/D-01_v.jpg",
            ]
        ]);
    }
}
