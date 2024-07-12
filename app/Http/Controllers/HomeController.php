<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(){
    //     return view('home');
    // }

    public function index(){
        $products = Product::all();
        $sliced = $products->slice(0, 5);
        return view('home', compact('sliced'));
    }
}
