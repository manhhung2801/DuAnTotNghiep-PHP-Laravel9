<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin user',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => \Hash::make('123123')
            ],
            [
                'name' => 'User one',
                'email' => 'user1@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'user two',
                'email' => 'user2@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'user three',
                'email' => 'user3@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('password')
            ]
        ]);
    }
}
