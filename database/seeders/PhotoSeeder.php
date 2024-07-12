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
                'title' => "",
                'image_url' => "",
                'product_id' => "",
            ],
            
        ];

        foreach($allPhotos as $photo){
            DB::table('photos')->insert([
                $photo,
            ]);
        }
    }
}
