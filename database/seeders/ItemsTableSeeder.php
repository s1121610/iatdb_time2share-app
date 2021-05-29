<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name' => "Toyota Yaris (groen) uit 2001. Handgeschakeld",
            'category' => "Autos",
            'description' => "Een Toyota Yaris uit 2001. Verzekerd. 5-deurs en handgeschakeld. Rijdt perfect!",
            'location' => "Den Haag",
            'image' => "./img/autos/yaris.jpg",
            'owner' => "MAXimaal",
            'deadline' => "2021-05-09"
        ]);

        DB::table('items')->insert([
            'name' => "prachtige grote parasol aluminium 350 cm blauw + voet",
            'category' => "Partybenodigdheden",
            'description' => "Een grote 350 cm aluminium parasol. Deze parasol heeft een stok diameter van 48 mm, is deelbaar, en heeft een opdraaimechanisme.",
            'location' => "Heerlen",
            'image' => "./img/header/Partybenodigdheden/parasol.jpg",
            'owner' => "Kimose",
            'deadline' => "2021-05-09"
        ]);
        DB::table('items')->insert([
            'name' => "Toyota Yaris (groen) uit 2001. Handgeschakeld",
            'category' => "Autos",
            'description' => "Een Toyota Yaris uit 2001. Verzekerd. 5-deurs en handgeschakeld. Rijdt perfect!",
            'location' => "Den Haag",
            'image' => "./img/autos/yaris.jpg",
            'owner' => "MAXimaal",
            'deadline' => "2021-05-09"
        ]);
        DB::table('items')->insert([
            'name' => "Toyota Yaris (groen) uit 2001. Handgeschakeld",
            'category' => "Autos",
            'description' => "Een Toyota Yaris uit 2001. Verzekerd. 5-deurs en handgeschakeld. Rijdt perfect!",
            'location' => "Den Haag",
            'image' => "./img/autos/yaris.jpg",
            'owner' => "MAXimaal",
            'deadline' => "2021-05-09"
        ]);
        DB::table('items')->insert([
            'name' => "Toyota Yaris (groen) uit 2001. Handgeschakeld",
            'category' => "Autos",
            'description' => "Een Toyota Yaris uit 2001. Verzekerd. 5-deurs en handgeschakeld. Rijdt perfect!",
            'location' => "Den Haag",
            'image' => "./img/autos/yaris.jpg",
            'owner' => "MAXimaal",
            'deadline' => "2021-05-09"
        ]);
        DB::table('items')->insert([
            'name' => "Toyota Yaris (groen) uit 2001. Handgeschakeld",
            'category' => "Autos",
            'description' => "Een Toyota Yaris uit 2001. Verzekerd. 5-deurs en handgeschakeld. Rijdt perfect!",
            'location' => "Den Haag",
            'image' => "./img/autos/yaris.jpg",
            'owner' => "MAXimaal",
            'deadline' => "2021-04-29"
        ]);
    }
}