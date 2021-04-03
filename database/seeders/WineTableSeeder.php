<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class WineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wine_array = ["Chardonnay", "Merlot", "Rosé"];
        $wine_image_array = ["./img/Alcohol/Chardonnay.jpg", "./img/Alcohol/Merlot.jpg", "./img/Alcohol/Rose.jpg"];
        
        foreach($wine_array as $wine){
            DB::table('alcohol')->insert([
                'name' => $wine,
                'kind' => "Wine",
                'image' => "/img/Alcohol/Chardonnay.jpg",
            ]);
        }
    }
}
