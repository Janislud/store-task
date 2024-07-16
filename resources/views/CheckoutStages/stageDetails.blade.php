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
                    @include ('Components.checkoutNavigation')
                    <div class="stages__content">
                        <div class='stages__contact'>
                            <div class="stages__contact-row">
                                <p class="stages__sub">Contact</p>
                                <div class="stages__acount-check">
                                    <p class="order__text">Do you have an account?</p>
                                    <p class="order__text underline">Login</p>
                                </div>
                            </div>
                            <input type="text" class="stages__input" placeholder="Email or mobile phone number">
                            <div class="stages__checkbox-wrapper">
                                <input type="checkbox" class="stages__checkbox">
                                <p class="stages__text">Add me to Candleaf newsletter for a 10% discount</p>
                            </div>
                        </div>

                        <div class="stages__address">
                            <p class="stages__sub">Your Address</p>
                            <div class="stages__2input">
                                <input type="text" class="stages__input" placeholder="Name">
                                <input type="text" class="stages__input" placeholder="Second Name">
                            </div>
                            <input type="text" class="stages__input" placeholder="City and address">
                            <input type="text" class="stages__input" data-optional="true"
                                placeholder="Shipping note (optional)">
                            <div class="stages__2input">
                                <input type="text" class="stages__input" placeholder="City">
                                <input type="text" class="stages__input" placeholder="Postal Code">
                            </div>
                            <input type="text" class="stages__input" placeholder="Contry/Region">
                            <div class="stages__checkbox-wrapper">
                                <input type="checkbox" class="stages__checkbox">
                                <p class="stages__text">Save this informations for a future fast checkout</p>
                            </div>
                        </div>
                    </div>
                    <div class="stages__bottom">
                        <p class="stages__back underline">Back to cart</p>
                        <button class="stages__forward accent-btn">Go to shipping</button>
                    </div>
                </div>
            </div>

            @include('Components.checkoutSideBar')
        </div>
    </section>
@endsection

