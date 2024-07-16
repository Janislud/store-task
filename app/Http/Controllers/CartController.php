<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Add to cart

    // Alex edit: add second arg with form input#quantity which pass the value of quantity from PDP toggler
    public function addToCart($id, Request $request)
    {
        $product = Product::with('photos')->findOrFail($id);

        $quantity = $request->input('quantity', 1);

        $cart = session()->get('cart', []);

        $photo = $product->photos->isNotEmpty() ? $product->photos->first()->image_url : 'default_image_url';

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => $quantity,
                "price" => $product->price,
                "photo" => $photo
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed from cart successfully!');
    }

    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('cart.view', compact('cart'));
    }
}
