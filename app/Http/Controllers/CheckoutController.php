<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

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

        $request->session()->put('checkoutStages.stageShipping', $validated);
        return redirect()->route('checkoutStages.stagePayment');
    }

    public function showPaymentForm(Request $request)
    {
        $details = $request->session()->get('checkoutStages.stageDetails');
        $shipping = $request->session()->get('checkoutStages.stageShipping');
        $cart = $request->session()->get('cart', []);
        return view('checkoutStages.stagePayment', compact('details', 'shipping', 'cart'));
    }

    // STORE PAYMENT
    public function storePayment(Request $request)
    {
        $request->session()->put('checkoutStages.stagePayment', $request->all());
        return redirect()->route('checkoutStages.stageSuccess');
    }

    public function showSuccess(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        return view('checkoutStages.stageSuccess', compact('cart'));
    }
}
