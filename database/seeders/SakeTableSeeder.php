<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class SakeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sake_array = ["Junmai", "Ginjō", "Kuroshu"];
        $sake_image_array = ["./img/Alcohol/Junmai.jpg", "./img/Alcohol/Ginjo.jpg", "./img/Alcohol/Kuroshu.jpg"];

        foreach($sake_array as $sake){
            DB::table('alcohol')->insert([
                'name' => $sake,
                'kind' => "Sake",
                'image' => "/img/Alcohol/Junmai.jpg",
            ]);
        }
    }
}
