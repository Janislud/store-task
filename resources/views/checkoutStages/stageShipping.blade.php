@extends('layouts.checkout')

@section('title', 'Shipping')

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
                        <form action="{{ route('checkout.storeShipping') }}" method="POST">
                            @csrf
                        <div class="stages__shipping-details">
                            <div class="stages__fancybox">
                                <div class="stages__fancybox-item">
                                    <div>
                                        <p class="stages__fancybox-descr">Contact:</p>
                                        <p class="stages__text">{{ $details['email'] }}</p>
                                    </div>
                                    <a href="{{ route('checkoutStages.stageDetails', ['edit' => 'contact']) }}" class="stages__edit underline">Edit</a>
                                </div>
                                <div class="stages__fancybox-item">
                                    <div>
                                        <p class="stages__fancybox-descr">Ship to:</p>
                                        <p class="stages__text">{{ $details['address'] }}, {{ $details['city'] }}, {{ $details['postal_code'] }}, {{ $details['country'] }}</p>                                    </div>
                                        <a href="{{ route('checkoutStages.stageDetails', ['edit' => 'shipping']) }}" class="stages__edit underline">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="stages__shipping-method">
                            <p class="stages__sub">Shipping method</p>
                            <div class="stages__fancybox">
                                <div class="stages__fancybox-radio">
                                    <input type="radio" id="standard" name="shipping_method" value="standard" required>
                                    <label for="standard">
                                        <p>Standart Shipping</p>
                                        <p>Free</p>
                                    </label>
                                </div>
                            </div>
                            <div class="stages__fancybox">
                                <div class="stages__fancybox-radio">
                                    <input type="radio" id="express" name="shipping_method" value="standard" required>
                                    <label for="express">
                                        <p>Express Shipping</p>
                                        <p>$10.00</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stages__bottom">
                        <a href="{{ route('checkoutStages.stageDetails') }}" class="stages__back underline">Back to details</a>
                        <button type="submit" class="stages__forward accent-btn">Go to payment</button>
                    </div>
                </form>
                </div>
            </div>

            @include('Components.checkoutSideBar', ['cart' => $cart])
        </div>
    </section>
@endsection
