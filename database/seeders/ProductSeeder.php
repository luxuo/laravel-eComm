<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Monster Drink',
                'price'=>'2',
                'description'=>'Caffeinated drink that tastes like energy',
                'category'=>'drinks',
                'gallery'=>'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fsuperkulmedia.imgix.net%2Fmedia%2Fcatalog%2Fproduct%2F1%2F6%2F161832-ny-monster-energy-500-ml-energidrikk.jpg%3Fauto%3Dcompress%2Cformat%2Cstrip&f=1&nofb=1'
            ],
            [
                'name'=>'RedBull',
                'price'=>'3',
                'description'=>'Gives you wings',
                'category'=>'drinks',
                'gallery'=>'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Ffamarket.cl%2Fwp-content%2Fuploads%2F2021%2F01%2F0000293.jpg&f=1&nofb=1'
            ],
            [
                'name'=>'Bud Light',
                'price'=>'1',
                'description'=>'Alcoholic beer in a blue can',
                'category'=>'alcoholic',
                'gallery'=>'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.Kk8aS9BCScaWucoawiLKRQHaJ4%26pid%3DApi&f=1'
            ],[
                'name'=>'Mug Root Beer',
                'price'=>'2',
                'description'=>'Root beer by the best root beerer?',
                'category'=>'drinks',
                'gallery'=>'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.us-sweets.de%2Fmedia%2Fimage%2Fproduct%2F4165%2Flg%2Fmug-root-beer.jpg&f=1&nofb=1'
            ],[
                'name'=>'Mountain Dew',
                'price'=>'4',
                'description'=>'Purest juice straight from the mountain',
                'category'=>'drinks',
                'gallery'=>'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fkiosclub.com%2F5961-large_default%2Fgaseosa-mountain-dew-36-355-ml.jpg&f=1&nofb=1'
            ]
        ]);
    }
}
