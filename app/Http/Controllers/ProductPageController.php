<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    public function index(){
        $products = Product::with('photos')->get();
        return view('products.index', compact('products'));
    }
}
