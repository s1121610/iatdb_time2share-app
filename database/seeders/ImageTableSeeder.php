<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $images_array = ['Alcohol/Asahi.jpg', 'Alcohol/Chardonnay.jpg', 'Alcohol/Ginjo.jpg', 'Alcohol/Iki.jpg', 'Alcohol/Junmai.jpg', 'Alcohol/Kuroshu.jpg', 'Alcohol/Merlot.jpg', 'Alcohol/Rose.jpg', 'Alcohol/Sapporo.jpg', 'maki.jpg', 'nigiri.jpg', 'sushi_default.jpg'];
        foreach($images_array as $image){
            DB::table('images')->insert([
                'image' => '/img/' . $image
            ]);
        }
    }
}
