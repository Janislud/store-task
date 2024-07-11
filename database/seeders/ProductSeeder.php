<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

       $products = [
            [
                'name' => "Ivory History Candle",
                'description' => "A timeless candle with a classic ivory hue, evoking the elegance of historical charm.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "YellowGreen Head Candle",
                'description' => "Bright and refreshing, this candle combines yellow and green tones for a rejuvenating experience.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "SpringGreen Energy Candle",
                'description' => "Capture the essence of spring with this vibrant green candle, full of invigorating energy.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "HotPink Song Candle",
                'description' => "A playful hot pink candle that brings a cheerful melody to your senses.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "Sienna Church Candle",
                'description' => "Rich sienna color reminiscent of serene church interiors, perfect for peaceful moments.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "PeachPuff Find Candle",
                'description' => "Delight in the soft peach color and gentle scent, ideal for a relaxing discovery.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "Thistle Buy Candle",
                'description' => "A unique thistle-colored candle, perfect for adding a touch of intrigue to any room.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "RosyBrown Child Candle",
                'description' => "Warm and comforting, this rosy brown candle evokes the innocence of childhood.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "SlateBlue Change Candle",
                'description' => "Transform your space with this calming slate blue candle, perfect for new beginnings.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "LightGray First Candle",
                'description' => "A versatile light gray candle, ideal for any occasion and setting a soothing tone.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "GhostWhite Site Candle",
                'description' => "Ethereal and pure, this ghost white candle brings a touch of the supernatural to your home.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "IndianRed Year Candle",
                'description' => "Deep and rich, this Indian red candle symbolizes a year of passion and strength.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "PaleTurquoise Take Candle",
                'description' => "Light and airy, this pale turquoise candle captures the essence of a tranquil getaway.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "LightSlateGray Easy Candle",
                'description' => "Simplify your ambiance with this easy-going light slate gray candle.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "Gray Report Candle",
                'description' => "Sleek and professional, this gray candle is perfect for a sophisticated setting.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "LawnGreen Position Candle",
                'description' => "Vibrant and fresh, this lawn green candle brightens any space with its lively color.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "Purple They Candle",
                'description' => "Mysterious and luxurious, this purple candle adds a touch of elegance to any room.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "ForestGreen Better Candle",
                'description' => "Deep forest green hue that brings the tranquility of nature indoors.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "Red Person Candle",
                'description' => "Bold and confident, this red candle makes a powerful statement.",
                'price' => $faker->randomFloat(2,5,20),
            ],
            [
                'name' => "OrangeRed Night Candle",
                'description' => "Warm and inviting, this orange-red candle is perfect for cozy nights in.",
                'price' => $faker->randomFloat(2,5,20),
            ],
        ];

        foreach($products as $product){
            DB::table('products')->insert([
                $product,
            ]);
        }
    }
}
