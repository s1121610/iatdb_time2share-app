<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KindOfAlcoholTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kind_of_alcohol_array = ["Beer", "Wine", "Sake"];

        foreach($kind_of_alcohol_array as $kind_of_alcohol){
            DB::table('kind_of_alcohol')->insert([
                'kind' => $kind_of_alcohol
            ]);
        }
    }
}
