<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BeerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beer_array = ["Asahi", "Sapporo", "Iki"];
        $beer_image_array = ["./img/Alcohol/Asahi.jpg", "./img/Alcohol/Sapporo.jpg", "./img/Alcohol/Iki.jpg"];


        foreach($beer_array as $beer){
            DB::table('alcohol')->insert([
                'name' => $beer,
                'kind' => "Beer",
                'image' => "/img/Alcohol/Sapporo.jpg",
            ]);
        }

        
    }
}
