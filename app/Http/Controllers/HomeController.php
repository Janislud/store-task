<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::all();
        $sliced = $products->slice(0, 4);
        return view('home', compact('sliced'));
    }
}