<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Max",
            'email' => "test@test.nl",
            'password' => bcrypt('Dymo'),
            'age' => 19,
            'role' => "Admin",
        ]);

        DB::table('users')->insert([
            'name' => "Kim",
            'email' => "buskim05@gmail.com",
            'password' => bcrypt('Bloem'),
            'age' => 15,
            'role' => "Gast",
        ]);
    }
}
