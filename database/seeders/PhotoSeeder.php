<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allPhotos = [
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Ivory History Candle_1.webp",
                "product_id" => 1
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Ivory History Candle_2.webp",
                "product_id" => 1
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Ivory History Candle_3.webp",
                "product_id" => 1
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/YellowGreen Head Candle_1.webp",
                "product_id" => 2
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/YellowGreen Head Candle_2.webp",
                "product_id" => 2
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/YellowGreen Head Candle_3.webp",
                "product_id" => 2
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/SpringGreen Energy Candle_1.webp",
                "product_id" => 3
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/SpringGreen Energy Candle_2.webp",
                "product_id" => 3
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/SpringGreen Energy Candle_3.webp",
                "product_id" => 3
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/HotPink Song Candle_1.webp",
                "product_id" => 4
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/HotPink Song Candle_2.webp",
                "product_id" => 4
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/HotPink Song Candle_3.webp",
                "product_id" => 4
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Sienna Church Candle_1.webp",
                "product_id" => 5
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Sienna Church Candle_2.webp",
                "product_id" => 5
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Sienna Church Candle_3.webp",
                "product_id" => 5
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/PeachPuff Find Candle_1.webp",
                "product_id" => 6
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/PeachPuff Find Candle_2.webp",
                "product_id" => 6
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/PeachPuff Find Candle_3.webp",
                "product_id" => 6
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Thistle Buy Candle_1.webp",
                "product_id" => 7
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Thistle Buy Candle_2.webp",
                "product_id" => 7
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Thistle Buy Candle_3.webp",
                "product_id" => 7
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/RosyBrown Child Candle_1.webp",
                "product_id" => 8
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/RosyBrown Child Candle_2.webp",
                "product_id" => 8
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/RosyBrown Child Candle_3.webp",
                "product_id" => 8
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/SlateBlue Change Candle_1.webp",
                "product_id" => 9
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/SlateBlue Change Candle_2.webp",
                "product_id" => 9
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/SlateBlue Change Candle_3.webp",
                "product_id" => 9
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/LightGray First Candle_1.webp",
                "product_id" => 10
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/LightGray First Candle_2.webp",
                "product_id" => 10
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/LightGray First Candle_3.webp",
                "product_id" => 10
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/GhostWhite Site Candle_1.webp",
                "product_id" => 11
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/GhostWhite Site Candle_2.webp",
                "product_id" => 11
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/GhostWhite Site Candle_3.webp",
                "product_id" => 11
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/IndianRed Year Candle_1.webp",
                "product_id" => 12
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/IndianRed Year Candle_2.webp",
                "product_id" => 12
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/IndianRed Year Candle_3.webp",
                "product_id" => 12
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/PaleTurquoise Take Candle_1.webp",
                "product_id" => 13
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/PaleTurquoise Take Candle_2.webp",
                "product_id" => 13
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/PaleTurquoise Take Candle_3.webp",
                "product_id" => 13
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/LightSlateGray Easy Candle_1.webp",
                "product_id" => 14
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/LightSlateGray Easy Candle_2.webp",
                "product_id" => 14
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/LightSlateGray Easy Candle_3.webp",
                "product_id" => 14
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Gray Report Candle_1.webp",
                "product_id" => 15
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Gray Report Candle_2.webp",
                "product_id" => 15
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Gray Report Candle_3.webp",
                "product_id" => 15
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/LawnGreen Position Candle_1.webp",
                "product_id" => 16
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/LawnGreen Position Candle_2.webp",
                "product_id" => 16
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/LawnGreen Position Candle_3.webp",
                "product_id" => 16
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Purple They Candle_1.webp",
                "product_id" => 17
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Purple They Candle_2.webp",
                "product_id" => 17
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Purple They Candle_3.webp",
                "product_id" => 17
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/ForestGreen Better Candle_1.webp",
                "product_id" => 18
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/ForestGreen Better Candle_2.webp",
                "product_id" => 18
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/ForestGreen Better Candle_3.webp",
                "product_id" => 18
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Red Person Candle_1.webp",
                "product_id" => 19
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Red Person Candle_2.webp",
                "product_id" => 19
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/Red Person Candle_3.webp",
                "product_id" => 19
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/OrangeRed Night Candle_1.webp",
                "product_id" => 20
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/OrangeRed Night Candle_2.webp",
                "product_id" => 20
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://shadyjuggler.com/bootcamp/OrangeRed Night Candle_3.webp",
                "product_id" => 20
            ]
        ];
        

        foreach($allPhotos as $photo){
            DB::table('photos')->insert([
                $photo,
            ]);
        }
    }
}
