<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function coupon (Request $request) {

        $couponCode = $request->coupon_code;
        $coupon = Coupon::where('name', $couponCode);

        if ($couponCode == $coupon) {
            return redirect()->back()->with('success', 'Coupon applied successfully!');
        }else{
            return redirect()->back()->withErrors('Invalid coupon code. Please try again.');
        }

        // $myCupons = Coupon::all();
        // @dd($myCupons);

        // return view('coupons.index', ['coupons' => $myCoupons]);
}
}