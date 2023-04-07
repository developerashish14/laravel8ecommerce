<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        	DB::table('products')->insert([
			'name'=>'LG MOBILE ',
			'price'=>'1000',
			'description'=>'asfd',
			'category'=>'mobile',
			'gallery'=>'https://www.lg.com/levant_en/mobile-phoness'
		],
		[
			'name'=>'Lava MOBILE ',
			'price'=>'1003405',
			'description'=>'asfd',
			'category'=>'mobile',
			'gallery'=>'https://www.lg.com/levant_en/mobile-phoness'
		],
		[
			'name'=>'HTC MOBILE ',
			'price'=>'14400',
			'description'=>'asfd',
			'category'=>'mobile',
			'gallery'=>'https://www.lg.com/levant_en/mobile-phoness'
		],
		[
			'name'=>'JIO MOBILE ',
			'price'=>'1300',
			'description'=>'asfd',
			'category'=>'mobile',
			'gallery'=>'https://www.lg.com/levant_en/mobile-phoness'
		]
		
		
		);
    }
}
