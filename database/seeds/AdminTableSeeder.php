<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();

        $faker = Factory::create();

        DB::table('admins')->insert([
            'name' => 'Admin',
            'email' => 'usmanarif.9219@gmail.com',
            'password' => Hash::make('abcd1234'),
            'role' => 1,
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
        ]);
    }
}
