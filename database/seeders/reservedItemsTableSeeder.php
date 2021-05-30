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
            'name' => "Toyota Yaris (groen) uit 2001. Handgeschakeld",
            'category' => "Autos",
            'description' => "Een Toyota Yaris uit 2001. Verzekerd. 5-deurs en handgeschakeld. Rijdt perfect!",
            'location' => "Den Haag",
            'image' => "./img/autos/yaris.jpg",
            'owner' => "MAXimaal",
            'deadline' => "2021-05-09",
            'borrower' => "Kimose"
        ]);
    }
}
