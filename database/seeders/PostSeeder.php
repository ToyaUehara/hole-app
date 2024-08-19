<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Datetime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
                'user_id' => 1,
                'hole_id' => 1,
                'evaluation' => 3,
                'body' => 'explanation',
                'image_url' => 'https://www.nipponbudokan.or.jp/CDFy5t/wp-content/themes/budokan/images/img_about01-01.jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('posts')->insert([
                'user_id' => 1,
                'hole_id' => 2,
                'evaluation' => 3,
                'body' => 'explanation',
                'image_url' => 'https://town.mec-h.com/mh-yokohama/wp-content/uploads/2023/06/331206_yokohamaarena.jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
