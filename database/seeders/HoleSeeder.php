<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Datetime;

class HoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('holes')->insert([
                'name' => '日本武道館',
                'capacity' => 10000,
                'latitude' => 35.6974426374625, 
                'longitude' => 139.7493642707003,
                'homepage_url' => 'https://www.nipponbudokan.or.jp/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '横浜アリーナ',
                'capacity' => 12000,
                'latitude' => 35.51244236941534, 
                'longitude' => 35.51244236941534,
                'homepage_url' => 'https://www.yokohama-arena.co.jp/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}

