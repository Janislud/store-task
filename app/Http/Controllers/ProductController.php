<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct($id){
        $product = Product::with('photos')->findOrFail($id);
        return view('showProduct', compact('product'));
    }
}
