<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class SushiTemakiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $temaki_sushi_array = ["Salmon", "Sake", "Ebi", "Tamago", "Tuna"];

        foreach($temaki_sushi_array as $temaki){
            DB::table('sushi')->insert([
                'name' => $temaki,
                'kind' => "Temaki",
                'description' => "Sushi with " . $temaki . " inside.",
                'image' => '/img/nigiri.jpg'
            ]);
        }
    }
}