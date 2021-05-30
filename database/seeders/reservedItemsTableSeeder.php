<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class reservedItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservedItems')->insert([
            'name' => "Rijke tata kleding",
            'category' => "Kleding",
            'description' => "Wil je eruit zien als een rijke tata? Leen dan mijn kleding",
            'location' => "Amsterdam",
            'image' => "./img/rijkeTataKleding.jpg",
            'owner' => "MAXimaal",
            'deadline' => "2022-06-01",
            'borrower' => "Kimose"
        ]);
    }
}
