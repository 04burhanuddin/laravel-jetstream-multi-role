<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => '1',
                'name' => 'Admin',
                'role' => 1,
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin1234'),
                'remember_token' => NULL,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '2',
                'name' => 'User',
                'role' => 0,
                'email' => 'user@gmail.com',
                'password' => bcrypt('user1234'),
                'remember_token' => NULL,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        ]);
    }
}
