@extends('layouts.checkout')

@section('title', 'Details')

@section('content')
    <section id="checkout">
        <div class="container">

            <div class="stages">
                <div class="img__wrapper">
                    <a href="/" id="checkout-logo">
                        <img src="{{ asset('assets/Main-logo.svg') }}" alt="logo" class="logo">
                    </a>
                </div>
                <div class="stages__wrapper">
                    @include ('Components.checkoutNavigation', ["stageIndex" => 1])
                    <div class="stages__content">
                        <form action="{{ route('checkout.storeDetails') }}" method="POST">
                            @csrf
                        <div class='stages__contact'>
                            <div class="stages__contact-row">
                                <p class="stages__sub">Contact</p>
                                {{-- <div class="stages__acount-check">
                                    <p class="order__text">Do you have an account?</p>
                                    <p class="order__text underline">Login</p>
                                </div> --}}
                            </div>
                            <input type="text" name="email" class="stages__input" placeholder="Email" required value="{{ session('checkoutStages.stageDetails.email') }}">
                            <div class="stages__checkbox-wrapper">
                                <input type="checkbox" name="newsletter" class="stages__checkbox">
                                <p class="stages__text">Add me to Candleaf newsletter for a 10% discount</p>
                            </div>
                        </div>

                        <div class="stages__address">
                            <p class="stages__sub">Your Address</p>
                            <div class="stages__2input">
                                <input type="text" name="first_name" class="stages__input" placeholder="Name" required value="{{ session('checkoutStages.stageDetails.first_name') }}">
                                <input type="text" name="second_name" class="stages__input" placeholder="Second Name" required value="{{ session('checkoutStages.stageDetails.second_name') }}">
                            </div>
                            <input type="text" name="address" class="stages__input" placeholder="Address" required value="{{ session('checkoutStages.stageDetails.address') }}">
                            <input type="text" name="shipping_note" class="stages__input" data-optional="true" placeholder="Shipping note (optional)" value="{{ session('checkoutStages.stageDetails.shipping_note') }}">
                            <div class="stages__2input">
                                <input type="text" name="city" class="stages__input" placeholder="City" required value="{{ session('checkoutStages.stageDetails.city') }}">
                                <input type="text" name="postal_code" class="stages__input" placeholder="Postal Code" required value="{{ session('checkoutStages.stageDetails.postal_code') }}">
                            </div>
                            <input type="text" name="country" class="stages__input" placeholder="Contry/Region" required value="{{ session('checkoutStages.stageDetails.country') }}">
                            <div class="stages__checkbox-wrapper">
                                <input type="checkbox" name="save_info" class="stages__checkbox">
                                <p class="stages__text">Save this informations for a future fast checkout</p>
                            </div>
                        </div>
                    </div>
                    <div class="stages__bottom">
                        <a href="{{ route('cart.view') }}" class="stages__back underline">Back to cart</a>
                        <button type="submit" class="stages__forward accent-btn">Go to shipping</button>
                    </div>
                </form>
                </div>
            </div>

            @include('Components.checkoutSideBar', ['cart' => $cart, 'shippingMethod' => session('checkoutStages.stageShipping.shipping_method')])

        </div>
    </section>
@endsection

