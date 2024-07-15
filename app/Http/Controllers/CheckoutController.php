<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function showDetailsForm()
    {
        return view('checkout.details');
    }

    public function storeDetails(Request $request)
    {
        $request->session()->put('checkout.details', $request->all());
        return redirect()->route('checkout.shipping');
    }

    public function showShippingForm(Request $request)
    {
        $details = $request->session()->get('checkout.details');
        return view('checkout.shipping', compact('details'));
    }

    public function storeShipping(Request $request)
    {
        $request->session()->put('checkout.shipping', $request->all());
        return redirect()->route('checkout.payment');
    }

    public function showPaymentForm(Request $request)
    {
        $details = $request->session()->get('checkout.details');
        $shipping = $request->session()->get('checkout.shipping');
        return view('checkout.payment', compact('details', 'shipping'));
    }

    public function storePayment(Request $request)
    {
        $request->session()->put('checkout.payment', $request->all());
        return redirect()->route('checkout.success');
    }

    public function showSuccess()
    {
        return view('checkout.success');
    }
}
