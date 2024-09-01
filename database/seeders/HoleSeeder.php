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
                'latitude' => 43.77251061797419, 
                'longitude' => 142.36591594552482,
                'homepage_url' => 'https://www1.city.asahikawa.hokkaido.jp/files/bunkashinko/siminbunka/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '大雪クリスタルホール',
                'capacity' => 597,
                'latitude' => 43.760704823690425, 
                'longitude' => 142.35123686138127,
                'homepage_url' => 'https://www.city.asahikawa.hokkaido.jp/kurashi/329/348/357/d054744.html',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '芦別市民会館',
                'capacity' => 908,
                'latitude' => 43.519296597896954, 
                'longitude' => 142.1929928460359,
                'homepage_url' => 'https://www.city.ashibetsu.hokkaido.jp/docs/5173.html',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '帯広市民文化ホール',
                'capacity' => 1540,
                'latitude' => 42.91954185369525, 
                'longitude' => 143.19793211585636,
                'homepage_url' => 'https://www.obihiro-foundation.jp/shisetsu/bunkahall/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '北広島市芸術文化ホール',
                'capacity' => 597,
                'latitude' => 42.97923428621623, 
                'longitude' => 141.56536680741712,
                'homepage_url' => 'https://www.obihiro-foundation.jp/shisetsu/bunkahall/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('holes')->insert([
                'name' => 'コーチャンフォー釧路文化ホール',
                'capacity' => 1524,
                'latitude' => 43.01028941483623, 
                'longitude' => 144.37273445396409,
                'homepage_url' => 'http://www.kushiro-bunka.or.jp/hall/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '札幌市文化教育会館',
                'capacity' => 1100,
                'latitude' => 43.059692868842525, 
                'longitude' => 141.33704971534527,
                'homepage_url' => 'https://www.kyobun.org/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '札幌コンサートホールKitara',
                'capacity' => 2008,
                'latitude' => 43.04460888105616, 
                'longitude' => 141.35241340896349,
                'homepage_url' => 'https://www.kitara-sapporo.or.jp/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '端野町公民館',
                'capacity' => 301,
                'latitude' => 43.861409299667855, 
                'longitude' => 143.94283616930937,
                'homepage_url' => 'https://www.city.kitami.lg.jp/administration/education/detail.php?content=6337',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('holes')->insert([
                'name' => '千歳市民文化センター(北ガス文化ホール)',
                'capacity' => 1275,
                'latitude' => 42.829603156296514, 
                'longitude' => 141.6462257613812,
                'homepage_url' => 'https://www.chitosebunka.jp/7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
           DB::table('holes')->insert([
                'name' => '根室市総合文化会館',
                'capacity' => 1000,
                'latitude' => 43.33229474401623, 
                'longitude' => 145.59195515396408,
                'homepage_url' => 'https://www.city.nemuro.hokkaido.jp/lifeinfo/kakuka/kyoikuiinkai/sougoubunka/index.html',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '登別市民会館',
                'capacity' => 709,
                'latitude' => 42.415147393146306, 
                'longitude' => 141.0935759232735,
                'homepage_url' => 'https://www.city.noboribetsu.lg.jp/docs/siminnkaikann/7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '美幌町民会館',
                'capacity' => 499,
                'latitude' => 43.8266529328118, 
                'longitude' => 144.10836484654695,
                'homepage_url' => 'http://www.town.bihoro.hokkaido.jp/docs/2020043000018/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '幌加内町生涯学習センターあえる97',
                'capacity' => 252,
                'latitude' => 44.00674810257722, 
                'longitude' => 142.1560938460359,
                'homepage_url' => 'http://lib.net-bibai.co.jp/horokanai/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '文化センターさざ波',
                'capacity' => 422,
                'latitude' => 44.223338129699066, 
                'longitude' => 143.6193008227624,
                'homepage_url' => 'https://www.town.yubetsu.lg.jp/administration/culture/detail.html?content=59/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('holes')->insert([
                'name' => '留萌市文化センター',
                'capacity' => 826,
                'latitude' => 43.93422793330028, 
                'longitude' => 141.64602081483423,
                'homepage_url' => 'https://rumoisports.web.fc2.com/ko-bu.htm',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => 'ゆめホール知床',
                'capacity' => 600,
                'latitude' => 43.91171100825238, 
                'longitude' => 144.67258876138123,
                'homepage_url' => 'https://www.town.shari.hokkaido.jp/kosodate_kyoiku_bunka_sports/yumehallshiretoko/index.html',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '北通り総合文化センター「ウイング」',
                'capacity' => 287,
                'latitude' => 41.525787071286786, 
                'longitude' => 140.9312915127858,
                'homepage_url' => 'https://www.wingkita.jp/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '下北文化会館',
                'capacity' => 1186,
                'latitude' => 41.295708974927464, 
                'longitude' => 141.1979647262688,
                'homepage_url' => 'https://shimobun.com/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
           DB::table('holes')->insert([
                'name' => '十和田市民文化センター',
                'capacity' => 998,
                'latitude' => 40.61251556176378, 
                'longitude' => 141.21262442439095,
                'homepage_url' => 'https://www.city.towada.lg.jp/shisei/shisetsu/cunkacenter-yoyaku.html',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '弘前市民会館',
                'capacity' => 1343,
                'latitude' => 40.60481941636463, 
                'longitude' => 140.4622592108998,
                'homepage_url' => 'https://www.city.hirosaki.aomori.jp/shiminkaikan/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
          DB::table('holes')->insert([
                'name' => '弘前市民会館',
                'capacity' => 1343,
                'latitude' => 40.60481941636463, 
                'longitude' => 140.4622592108998,
                'homepage_url' => 'https://www.city.hirosaki.aomori.jp/shiminkaikan/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('holes')->insert([
                'name' => '弘前文化センター',
                'capacity' => 552,
                'latitude' => 40.60710515476917, 
                'longitude' => 140.46895074232734,
                'homepage_url' => 'https://www.city.hirosaki.aomori.jp/hirosakibunka/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('holes')->insert([
                'name' => '五所川原市ふるさと交流圏民センター(オルテンシア)',
                'capacity' => 552,
                'latitude' => 40.8208392303323, 
                'longitude' => 140.44880155694307,
                'homepage_url' => 'https://www.city.goshogawara.lg.jp/kyouiku/bunka/ortensia-top.html',
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

