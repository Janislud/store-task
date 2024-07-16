@extends('layouts.checkout')

@section('title', 'Success')

@section('content')
    <section id="checkout" class="show-checkoutTotal-mob">
        <div class="container">

            <div class="stages">
                <div class="img__wrapper">
                    <a href="/" id="checkout-logo">
                        <img src="{{ asset('assets/Main-logo.svg') }}" alt="logo" class="logo">
                    </a>
                </div>
                <div class="stages__wrapper">
                    <div class="stages__content stages__content_success">
                        <img src="{{ asset('assets/success-img.png') }}" alt="success" class="success">
                        <p class="stages__title">Payment Confirmed</p>
                        <p class="stages-orderId">ORDER # {{ $order_id }}</p>
                        <p class="stages__descr">
                            Thank you for buying from Storefront. The nature is grateful to you. Now that your order is
                            confirmed it will be ready to ship in 2 days. Please check your inbox in the future for your
                            order updates.
                        </p>
                        <a href="{{ route('products.index') }}" class="stages__forward accent-btn">Back to shopping</a>
                    </div>

                    {{-- very important to leave it here, or you be fired --}}
                    <div class="stages__bottom"></div> 
                </div>
            </div>
        </div>
    </section>
@endsection