<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories_array = ["Kleding", "Autos", "Tweewielers", "Elektronica", "Opbergmatriaal", "Camperen", "Gereedschap", "Partybenodigdheden", "Overig"];

        foreach($categories_array as $category){
            DB::table('categories')->insert([
                'category' => $category,
            ]);
        }
    }
}
