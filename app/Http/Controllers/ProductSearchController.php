<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductSearchController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        if ($search) {
            // Fetch products that match the search query
            $products = Product::where('name', 'like', '%' . $search . '%')->get();
        } else {
            // Fetch all products if no search query
            $products = Product::all();
        }

        return view('products', compact('products', 'search'));
    }
}
