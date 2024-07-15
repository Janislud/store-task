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
                "image_url" => "https://bootcamp.shadyjuggler.com/Ivory History Candle_1.webp",
                "product_id" => 1
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/Ivory History Candle_2.webp",
                "product_id" => 1
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/Ivory History Candle_3.webp",
                "product_id" => 1
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/YellowGreen Head Candle_1.webp",
                "product_id" => 2
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/YellowGreen Head Candle_2.webp",
                "product_id" => 2
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/YellowGreen Head Candle_3.webp",
                "product_id" => 2
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/SpringGreen Energy Candle_1.webp",
                "product_id" => 3
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/SpringGreen Energy Candle_2.webp",
                "product_id" => 3
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/SpringGreen Energy Candle_3.webp",
                "product_id" => 3
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/HotPink Song Candle_1.webp",
                "product_id" => 4
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/HotPink Song Candle_2.webp",
                "product_id" => 4
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/HotPink Song Candle_3.webp",
                "product_id" => 4
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/Sienna Church Candle_1.webp",
                "product_id" => 5
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/Sienna Church Candle_2.webp",
                "product_id" => 5
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/Sienna Church Candle_3.webp",
                "product_id" => 5
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/PeachPuff Find Candle_1.webp",
                "product_id" => 6
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/PeachPuff Find Candle_2.webp",
                "product_id" => 6
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/PeachPuff Find Candle_3.webp",
                "product_id" => 6
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/Thistle Buy Candle_1.webp",
                "product_id" => 7
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/Thistle Buy Candle_2.webp",
                "product_id" => 7
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/Thistle Buy Candle_3.webp",
                "product_id" => 7
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/RosyBrown Child Candle_1.webp",
                "product_id" => 8
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/RosyBrown Child Candle_2.webp",
                "product_id" => 8
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/RosyBrown Child Candle_3.webp",
                "product_id" => 8
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/SlateBlue Change Candle_1.webp",
                "product_id" => 9
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/SlateBlue Change Candle_2.webp",
                "product_id" => 9
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/SlateBlue Change Candle_3.webp",
                "product_id" => 9
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/LightGray First Candle_1.webp",
                "product_id" => 10
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/LightGray First Candle_2.webp",
                "product_id" => 10
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/LightGray First Candle_3.webp",
                "product_id" => 10
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/GhostWhite Site Candle_1.webp",
                "product_id" => 11
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/GhostWhite Site Candle_2.webp",
                "product_id" => 11
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/GhostWhite Site Candle_3.webp",
                "product_id" => 11
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/IndianRed Year Candle_1.webp",
                "product_id" => 12
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/IndianRed Year Candle_2.webp",
                "product_id" => 12
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/IndianRed Year Candle_3.webp",
                "product_id" => 12
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/PaleTurquoise Take Candle_1.webp",
                "product_id" => 13
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/PaleTurquoise Take Candle_2.webp",
                "product_id" => 13
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/PaleTurquoise Take Candle_3.webp",
                "product_id" => 13
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/LightSlateGray Easy Candle_1.webp",
                "product_id" => 14
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/LightSlateGray Easy Candle_2.webp",
                "product_id" => 14
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/LightSlateGray Easy Candle_3.webp",
                "product_id" => 14
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/Gray Report Candle_1.webp",
                "product_id" => 15
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/Gray Report Candle_2.webp",
                "product_id" => 15
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/Gray Report Candle_3.webp",
                "product_id" => 15
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/LawnGreen Position Candle_1.webp",
                "product_id" => 16
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/LawnGreen Position Candle_2.webp",
                "product_id" => 16
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/LawnGreen Position Candle_3.webp",
                "product_id" => 16
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/Purple They Candle_1.webp",
                "product_id" => 17
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/Purple They Candle_2.webp",
                "product_id" => 17
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/Purple They Candle_3.webp",
                "product_id" => 17
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/ForestGreen Better Candle_1.webp",
                "product_id" => 18
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/ForestGreen Better Candle_2.webp",
                "product_id" => 18
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/ForestGreen Better Candle_3.webp",
                "product_id" => 18
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/Red Person Candle_1.webp",
                "product_id" => 19
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/Red Person Candle_2.webp",
                "product_id" => 19
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/Red Person Candle_3.webp",
                "product_id" => 19
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/OrangeRed Night Candle_1.webp",
                "product_id" => 20
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/OrangeRed Night Candle_2.webp",
                "product_id" => 20
            ],
            [
                "title" => "not important value ;D",
                "image_url" => "https://bootcamp.shadyjuggler.com/OrangeRed Night Candle_3.webp",
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
