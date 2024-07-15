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
                'title' => "Svece 1",
                'image_url' => "https://cdn.shopify.com/s/files/1/0505/8687/8125/products/Dining_Candles_CollectionFluoros_Lit.jpg?v=1666626873",
                'product_id' => "1",
            ],
            [
                'title' => "Svece 2",
                'image_url' => "https://abeautifulmess.com/wp-content/uploads/2023/02/homemade-candles.jpg",
                'product_id' => "2",
            ],
            [
                'title' => "Svece 3",
                'image_url' => "https://m.media-amazon.com/images/I/81z-g9rGkWL._AC_UF894,1000_QL80_.jpg",
                'product_id' => "3",
            ],
            [
                'title' => "Svece 4",
                'image_url' => "https://i.etsystatic.com/38718586/r/il/c38452/5464967957/il_fullxfull.5464967957_cc24.jpg",
                'product_id' => "4",
            ],
            [
                'title' => "Svece 1",
                'image_url' => "https://cdn.shopify.com/s/files/1/0505/8687/8125/products/Dining_Candles_CollectionFluoros_Lit.jpg?v=1666626873",
                'product_id' => "5",
            ],
            [
                'title' => "Svece 2",
                'image_url' => "https://abeautifulmess.com/wp-content/uploads/2023/02/homemade-candles.jpg",
                'product_id' => "6",
            ],
            [
                'title' => "Svece 3",
                'image_url' => "https://m.media-amazon.com/images/I/81z-g9rGkWL._AC_UF894,1000_QL80_.jpg",
                'product_id' => "7",
            ],
            [
                'title' => "Svece 4",
                'image_url' => "https://i.etsystatic.com/38718586/r/il/c38452/5464967957/il_fullxfull.5464967957_cc24.jpg",
                'product_id' => "8",
            ],
            [
                'title' => "Svece 1",
                'image_url' => "https://cdn.shopify.com/s/files/1/0505/8687/8125/products/Dining_Candles_CollectionFluoros_Lit.jpg?v=1666626873",
                'product_id' => "9",
            ],
            [
                'title' => "Svece 2",
                'image_url' => "https://abeautifulmess.com/wp-content/uploads/2023/02/homemade-candles.jpg",
                'product_id' => "10",
            ],
            [
                'title' => "Svece 3",
                'image_url' => "https://m.media-amazon.com/images/I/81z-g9rGkWL._AC_UF894,1000_QL80_.jpg",
                'product_id' => "11",
            ],
            [
                'title' => "Svece 4",
                'image_url' => "https://i.etsystatic.com/38718586/r/il/c38452/5464967957/il_fullxfull.5464967957_cc24.jpg",
                'product_id' => "12",
            ],
            [
                'title' => "Svece 1",
                'image_url' => "https://cdn.shopify.com/s/files/1/0505/8687/8125/products/Dining_Candles_CollectionFluoros_Lit.jpg?v=1666626873",
                'product_id' => "13",
            ],
            [
                'title' => "Svece 2",
                'image_url' => "https://abeautifulmess.com/wp-content/uploads/2023/02/homemade-candles.jpg",
                'product_id' => "14",
            ],
            [
                'title' => "Svece 3",
                'image_url' => "https://m.media-amazon.com/images/I/81z-g9rGkWL._AC_UF894,1000_QL80_.jpg",
                'product_id' => "15",
            ],
            [
                'title' => "Svece 4",
                'image_url' => "https://i.etsystatic.com/38718586/r/il/c38452/5464967957/il_fullxfull.5464967957_cc24.jpg",
                'product_id' => "16",
            ],
            [
                'title' => "Svece 1",
                'image_url' => "https://cdn.shopify.com/s/files/1/0505/8687/8125/products/Dining_Candles_CollectionFluoros_Lit.jpg?v=1666626873",
                'product_id' => "17",
            ],
            [
                'title' => "Svece 2",
                'image_url' => "https://abeautifulmess.com/wp-content/uploads/2023/02/homemade-candles.jpg",
                'product_id' => "18",
            ],
            [
                'title' => "Svece 3",
                'image_url' => "https://m.media-amazon.com/images/I/81z-g9rGkWL._AC_UF894,1000_QL80_.jpg",
                'product_id' => "19",
            ],
            [
                'title' => "Svece 4",
                'image_url' => "https://i.etsystatic.com/38718586/r/il/c38452/5464967957/il_fullxfull.5464967957_cc24.jpg",
                'product_id' => "20",
            ],
            
        ];

        foreach($allPhotos as $photo){
            DB::table('photos')->insert([
                $photo,
            ]);
        }
    }
}
