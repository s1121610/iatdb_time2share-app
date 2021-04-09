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
            'username' => "MAXimaal",
            'name' => "Max",
            'email' => "test@test.nl",
            'password' => bcrypt('Dymo'),
        ]);

        DB::table('users')->insert([
            'username' => "Kimose",
            'name' => "Kim",
            'email' => "buskim05@gmail.com",
            'password' => bcrypt('Bloem'),
        ]);
    }
}
