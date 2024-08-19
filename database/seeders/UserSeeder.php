<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Datetime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
                'name' => 'user1',
                'email' => 'user1@mail.com',
                'password' => 'user1user1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
