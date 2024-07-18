<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeProductController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::limit(4)->get(); // Assuming you want the first 4 as featured
        $randomProducts = Product::inRandomOrder()->limit(4)->get();

        return view('home', compact('featuredProducts', 'randomProducts'));
    }

}