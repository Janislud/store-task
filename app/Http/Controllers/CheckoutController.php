<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    public function showDetailsForm()
    {
        $cart = session()->get('cart', []);
        return view('checkoutStages.stageDetails', compact('cart'));
    }

    // STORE DETAILS
    public function storeDetails(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'first_name' => 'required|string|max:255',
            'second_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'shipping_note' => 'nullable|string|max:255',
        ]);

        $request->session()->put('checkoutStages.stageDetails', $validated);

        return redirect()->route('checkoutStages.stageShipping');
    }

    public function showShippingForm(Request $request)
    {
        $details = $request->session()->get('checkoutStages.stageDetails');
        $cart = $request->session()->get('cart', []);
        return view('checkoutStages.stageShipping', compact('details', 'cart'));
    }

    // STORE SHIPPING
    public function storeShipping(Request $request)
    {
        $validated = $request->validate([
            'shipping_method' => 'required|string',
        ]);

        $shippingCost = $validated['shipping_method'] == 'express' ? 10.00 : 0.00;

        $request->session()->put('checkoutStages.stageShipping', [
        'shipping_method' => $validated['shipping_method'],
        'shipping_cost' => $shippingCost,
        ]);
        return redirect()->route('checkoutStages.stagePayment');
    }

    public function showPaymentForm(Request $request)
    {
        Log::info('storePayment called');
        $details = $request->session()->get('checkoutStages.stageDetails');
        $shipping = $request->session()->get('checkoutStages.stageShipping');
        $cart = $request->session()->get('cart', []);
        $shippingMethod = $shipping['shipping_method'] ?? null;
        $shippingCost = $shipping['shipping_cost'] ?? 0.00;
        return view('checkoutStages.stagePayment', compact('details', 'shipping', 'cart', 'shippingMethod', 'shippingCost'));
    }

    // STORE PAYMENT
    public function storePayment(Request $request)
    {
        $validated = $request->validate([
            'card_number' => 'required|string|max:255',
            'holder_name' => 'required|string|max:255',
            'expiry_date' => 'required|string|max:5',
            'cvv' => 'required|string|max:4',
        ]);

        $details = $request->session()->get('checkoutStages.stageDetails');
        $shipping = $request->session()->get('checkoutStages.stageShipping');
        $cart = $request->session()->get('cart', []);

        $order = new Order();
        $order->user_id = auth()->check() ? auth()->id() : null;
        $order->email = $details['email'];
        $order->first_name = $details['first_name'];
        $order->second_name = $details['second_name'];
        $order->address = $details['address'];
        $order->city = $details['city'];
        $order->postal_code = $details['postal_code'];
        $order->country = $details['country'];
        $order->shipping_method = $shipping['shipping_method'];
        $order->shipping_cost = $shipping['shipping_cost'];
        $order->total = array_sum(array_map(fn($item) => $item['quantity'] * $item['price'], $cart)) + $shipping['shipping_cost'];
        $order->card_number = $validated['card_number'];
        $order->holder_name = $validated['holder_name'];
        $order->expiry_date = $validated['expiry_date'];
        $order->cvv = $validated['cvv'];
        $order->save();

        foreach ($cart as $productId => $item) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $productId;
            $orderItem->quantity = $item['quantity'];
            $orderItem->price = $item['price'];
            $orderItem->save();
        }

        $request->session()->forget('checkoutStages');
        $request->session()->forget('cart');

        return redirect()->route('checkoutStages.stageSuccess', ['order_id' => $order->id])->with('success', 'Order placed successfully!');
    }

    public function showSuccess($order_id)
    {
        return view('checkoutStages.stageSuccess', compact('order_id'));
    }
    
}
