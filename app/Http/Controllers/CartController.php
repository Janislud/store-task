<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Add to cart
    public function addToCart($id)
    {
        $product = Product::with('photos')->findOrFail($id);

        $cart = session()->get('cart', []);

        $photo = $product->photos->isNotEmpty() ? $product->photos->first()->image_url : 'default_image_url';

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
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

    public function checkout(Request $request)
        {
            return view('checkoutStages.stageDetails');
    // $cart = session()->get('cart', []);

    //     if (empty($cart)) {
    //         return redirect()->back()->with('error', 'Your cart is empty.');
    //     }

    //     // Create a new order
    //     $order = new Order();
    //     $order->user_id = auth()->id();
    //     $order->total = array_sum(array_map(fn($item) => $item['quantity'] * $item['price'], $cart));
    //     $order->save();

    //     // Create order items
    //     foreach ($cart as $productId => $item) {
    //         $orderItem = new OrderItem();
    //         $orderItem->order_id = $order->id;
    //         $orderItem->product_id = $productId;
    //         $orderItem->quantity = $item['quantity'];
    //         $orderItem->price = $item['price'];
    //         $orderItem->save();
    //     }

    //     // Clear the cart
    //     session()->forget('cart');

    //     return redirect()->route('checkout.confirmation')->with('success', 'Order placed successfully!');
    }
}
