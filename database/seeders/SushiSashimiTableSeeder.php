<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SushiSashimiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sashimi_sushi_array = ["Salmon", "Tuna", "Spicy Tuna", "Spicy Salmon"];

        foreach($sashimi_sushi_array as $sashimi){
            DB::table('sushi')->insert([
                'name' => $sashimi,
                'kind' => "Sashimi",
                'description' => "A delicious big piece sashimi sushi with " . $sashimi,
                'image' => '/img/nigiri.jpg'
            ]);
        }
    }
}
