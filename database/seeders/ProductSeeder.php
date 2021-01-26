<?php

namespace Database\Seeders;

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
                'name'=>'Apple 11',
                'price'=>'300',
                'category'=>'Mobile',
                'description'=>'Smart Phone with 8gb ram  and much more feature',
                'gallery'=>'https://med.greatecno.com/153971-large_default/apple-iphone-11-4g-64gb-yellow-eu-mwlw2-a.jpg'
            ],
            [
                'name'=>'Panasonic TV',
                'price'=>'400',
                'category'=>'tv',
                'description'=>'Smart TV with much more feature',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/41ZygsKAIVL.jpg'
            ],

            [
                'name'=>'Soni TV',
                'price'=>'500',
                'category'=>'tv',
                'description'=>'Smart TV  with much more feature',
                'gallery'=>'https://www.lg.com/us/images/tvs/md06100597/gallery/86UM80-D1.jpg'
            ],

            [
                'name'=>'LG Fridge',
                'price'=>'200',
                'category'=>'fridge',
                'description'=>'Smart Fridge much more feature',
                'gallery'=>'https://5.imimg.com/data5/UV/BG/MY-15383654/lg-freeze-500x500.png'
            ],
        ]);

    }
}
