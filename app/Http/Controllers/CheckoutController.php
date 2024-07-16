<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function showDetailsForm()
    {
        return view('checkoutStages.stageDetails');
    }

    // STORE DETAILS
    public function storeDetails(Request $request)
    {
        $request->session()->put('checkoutStages.stageDetails', $request->all());
        return redirect()->route('checkoutStages.stageShipping');
    }

    public function showShippingForm(Request $request)
    {
        $details = $request->session()->get('checkoutStages.stageDetails');
        return view('checkoutStages.stageShipping', compact('stageDetails'));
    }

    // STORE SHIPPING
    public function storeShipping(Request $request)
    {
        $request->session()->put('checkoutStages.stageShipping', $request->all());
        return redirect()->route('checkoutStages.stagePayment');
    }

    public function showPaymentForm(Request $request)
    {
        $details = $request->session()->get('checkoutStages.stageDetails');
        $shipping = $request->session()->get('checkoutStages.stageShipping');
        return view('checkoutStages.stagePayment', compact('stageDetails', 'stageShipping'));
    }

    // STORE PAYMENT
    public function storePayment(Request $request)
    {
        $request->session()->put('checkoutStages.stagePayment', $request->all());
        return redirect()->route('checkoutStages.stageSuccess');
    }

    public function showSuccess()
    {
        return view('checkoutStages.stageSuccess');
    }
}
