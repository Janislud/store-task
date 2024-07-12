<?php

namespace App\Http\Controllers;

use App\Models\Photos;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $products = Product::all();
        // $photos = Photos::all();
        // return view('home', compact('photos'));

        $products = Product::with('photos')->get();
        return view('home', compact('products'));
    }


}
