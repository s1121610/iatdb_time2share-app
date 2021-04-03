<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ImageTableSeeder::class,
            KindOfSushiTableSeeder::class,
            SushiMakiTableSeeder::class,
            SushiNigiriTableSeeder::class,
            SushiSashimiTableSeeder::class,
            SushiTemakiTableSeeder::class,
            SushiUramakiTableSeeder::class,
            KindOfAlcoholTableSeeder::class,
            BeerTableSeeder::class,
            WineTableSeeder::class,
            SakeTableSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class
        ]);
    }
}
