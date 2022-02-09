<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =
        [
            [
                'name' => 'admin1',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('12345'),
                'role' => 'admin'
            ],
            [
                'name' => 'admin2',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('12345'),
                'role' => 'admin'
            ],
            [
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('12345'),
                'role' => 'user'
                ]

        ];
        DB::table('users')->insert($user);
    }
}
