<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $couponCode = [
            [
                'name' => 'COUPON10'
            ]
        ];

        foreach($couponCode as $coupon) {
            DB::table('coupon')->insert([
                $coupon,
            ]);
        }

    }
}
