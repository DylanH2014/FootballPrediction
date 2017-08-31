<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Dylan Harrington',
            'email' => 'dylanharrington44@gmail.com',
            'password' => 'test1234',
        ]);
    }
}
