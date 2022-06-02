<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            "name" => "user 1",
            "email" => "test1@gmail.com",
            "password" => Hash::make('1234'),

        ]);

        User::create([

            "name" => "user 2",
            "email" => "test2@gmail.com",
            "password" => Hash::make('1234'),

        ]);
    }
}
