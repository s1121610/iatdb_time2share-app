<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SushiUramakiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uramaki_sushi_array = ["Salmon", "Tuna", "California", "Spicy Tuna", "Spicy Salmon"];

        foreach($uramaki_sushi_array as $uramaki){
            DB::table('sushi')->insert([
                'name' => $uramaki,
                'kind' => "Uramaki",
                'description' => "Sushi!",
                'image' => '/img/nigiri.jpg'
            ]);
        }
    }
}
