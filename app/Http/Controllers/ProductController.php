<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('home', compact('products'));
    }

    public function jancisIndex()
    {
        // Fetch products from the database
        $products = Product::all();
        return view('products', compact('products'));
    }

}
