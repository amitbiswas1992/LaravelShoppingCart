<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
         
         'imagePath' => 'https://4.imimg.com/data4/WV/MP/MY-29279716/car-wheel-cover-250x250.jpg',
         'title'=> 'BMW',
         'description'=>' Super cool ',
         'price'=>199
     ]);
        $product->save();

         
         $product = new \App\Product([
         
         'imagePath'=>'https://3.imimg.com/data3/BR/OC/GLADMIN-74917/alloy-car-wheel-250x250.jpg',
         'title'=> 'BMW',
         'description'=>' Super cool ',
         'price'=>99


        ]);
        $product->save();
         
         $product = new \App\Product([
         
         'imagePath'=>'https://4.imimg.com/data4/ET/LI/MY-1692158/car-wheel-rim-250x250.jpg',
         'title'=> 'BMW',
         'description'=>' Super cool ',
         'price'=>149


        ]);
        $product->save();

        


    }
}
