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
                'name' => '旭川市民文化会館',
                'capacity' => 1546,
                'latitude' => 43.7723478974668,
                'longitude' => 142.3658944848666,
                'homepage_url' => 'https://www1.city.asahikawa.hokkaido.jp/files/bunkashinko/siminbunka/contents11.html',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('holes')->insert([
                'name' => '大雪クリスタホール',
                'capacity' => 597,
                'latitude' => 43.76049945288027, 
                'longitude' => 142.3509579087005,
                'homepage_url' => 'https://www.city.asahikawa.hokkaido.jp/kurashi/329/348/357/d054744.html',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('holes')->insert([
                'name' => '芦別市民会館',
                'capacity' => 908,
                'latitude' => 43.518767531121206,
                'longitude' => 142.19286409704668,
                'homepage_url' => 'https://www.city.ashibetsu.hokkaido.jp/docs/5173.html',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('holes')->insert([
                'name' => '帯広市民文化ホール',
                'capacity' => 1540,
                'latitude' => 42.919156838429,
                'longitude' => 143.198211062638,
                'homepage_url' => 'https://www.obihiro-foundation.jp/shisetsu/bunkahall/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '北広島市芸術文化ホール',
                'capacity' => 512,
                'latitude' => 42.979187161993245,
                'longitude' => 141.5650449393533,
                'homepage_url' => 'https://www.city.kitahiroshima.hokkaido.jp/hanahall/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
           DB::table('holes')->insert([
                'name' => 'コーチャンフォー釧路文化ホール',
                'capacity' => 1524,
                'latitude' => 43.00995988418638,
                'longitude' => 144.37259497719046,
                'homepage_url' => 'http://www.kushiro-bunka.or.jp/hall/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '札幌市教育文化会館',
                'capacity' => 1100,
                'latitude' => 43.05946551011254,
                'longitude' => 141.3370282557603,
                'homepage_url' => 'https://www.kyobun.org/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('holes')->insert([
                'name' => '札幌コンサートホールKitara',
                'capacity' => 2008,
                'latitude' => 43.861409270760994,
                'longitude' => 143.94297564229257,
                'homepage_url' => 'https://www.kitara-sapporo.or.jp/index.html',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
           DB::table('holes')->insert([
                'name' => '端野町公民館',
                'capacity' => 301,
                'latitude' => 43.044405180193934,
                'longitude' => 141.3522967980881,
                'homepage_url' => 'https://www.city.kitami.lg.jp/administration/town/detail.php?content=5644',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('holes')->insert([
                'name' => '千歳市民文化センター（北ガス文化ホール）',
                'capacity' => 1275,
                'latitude' => 42.829508707778956,
                'longitude' => 141.64611847109663,
                'homepage_url' => 'https://www.chitosebunka.jp/index.html',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '根室市総合文化会館',
                'capacity' => 1000,
                'latitude' => 43.33210741870583,
                'longitude' => 145.59192296555898,
                'homepage_url' => 'https://www.city.nemuro.hokkaido.jp/lifeinfo/kakuka/kyoikuiinkai/sougoubunka/index.html',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '登別市民会館',
                'capacity' => 709,
                'latitude' => 42.41487805474499,
                'longitude' => 141.09369393854638,
                'homepage_url' => 'https://www.city.noboribetsu.lg.jp/docs/siminnkaikann/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('holes')->insert([
                'name' => '美幌町民会館',
                'capacity' => 499,
                'latitude' => 44.006624604723434,
                'longitude' => 142.15592218277436,
                'homepage_url' => 'http://www.town.bihoro.hokkaido.jp/docs/2020043000018/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '幌加内町生涯学習センターあえる97',
                'capacity' => 252,
                'latitude' => 43.82613680389829,
                'longitude' => 144.10850956223797,
                'homepage_url' => 'http://lib.net-bibai.co.jp/horokanai/index.html',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '文化センターさざ波',
                'capacity' => 422,
                'latitude' => 44.22301518000126,
                'longitude' => 143.61921499018513,
                'homepage_url' => 'https://www.town.yubetsu.lg.jp/administration/culture/detail.html?content=59',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '留萌市文化センター',
                'capacity' => 828,
                'latitude' => 43.93395748576086,
                'longitude' => 141.64584915154992,
                'homepage_url' => 'https://www.e-rumoi.jp/index.html',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('holes')->insert([
                'name' => 'ゆめホール知床',
                'capacity' => 600,
                'latitude' => 43.911278145153396,
                'longitude' => 144.6723634539355,
                'homepage_url' => 'https://www.e-rumoi.jp/index.html',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
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

