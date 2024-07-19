@extends('layouts.checkout')

@section('title', 'Payment')

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
                    @include ('Components.checkoutNavigation', ["stageIndex" => 3])
                    <div class="stages__content stages__content_payment">
                        <form action="{{ route('checkout.storePayment') }}" method="POST">
                            @csrf
                            <div class="stages__shipement-details">
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
                                            <p class="stages__text">{{ $details['address'] }}, {{ $details['city'] }}, {{ $details['postal_code'] }}, {{ $details['country'] }}</p>
                                        </div>
                                        <a href="{{ route('checkoutStages.stageDetails', ['edit' => 'shipping']) }}" class="stages__edit underline">Edit</a>
                                    </div>
                                    <div class="stages__fancybox-item">
                                        <div>
                                            <p class="stages__fancybox-descr">Method:</p>
                                            <p class="stages__text">{{ $shipping['shipping_method'] == 'standard' ? 'Standard Shipping - FREE' : 'Express Shipping - $10.00' }}</p>
                                        </div>
                                        <a href="{{ route('checkoutStages.stageShipping') }}" class="stages__edit underline">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="stages__payment-method">
                                <p class="stages__sub">Payment method</p>
                                <div class="stages__card">
                                    <div class="stages__card-top">
                                        <img src="{{ asset('assets/bank-card.svg') }}" alt="card" class="card">
                                        Credit Card
                                    </div>
                                    <div class="stages__card-inputs">
                                        <div data-message="required field" class="stages__input-wrapper">
                                            <input cardNumberInput class="stages__input" name="card_number" placeholder="Card Number" required></input>
                                        </div>
                                        <div data-message="required field" class="stages__input-wrapper">
                                            <input class="stages__input" name="holder_name" placeholder="Holder Name" required></input>

                                        </div>
                                       
                                        <div class="stages__2input">
                                            <div data-message="required field" class="stages__input-wrapper">
                                                <input cardExpDateInput class="stages__input" name="expiry_date" placeholder="Expiration (MM/YY)" required></input>
                                            </div>
                                            <div data-message="required field" class="stages__input-wrapper">
                                                <input cardCvv class="stages__input" name="cvv" placeholder="CVV" required></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <form class="stages__billing">
                                <p class="stages__sub">Billing information</p>
                                <div class="stages__fancybox">
                                    <div class="stages__fancybox-radio">
                                        <input id="stages_radio-3" name="billing-radio" type="radio" value="same" required>
                                        <label for="stages_radio-3">Same as the shipping address</label>
                                    </div>
                                    <div class="stages__fancybox-radio">
                                        <input id="stages_radio-4" name="billing-radio" type="radio" value="different" required>
                                        <label for="stages_radio-4">Use a different address for billing</label>
                                    </div>
                                </div>
                            </form> --}}
                            </div>
                            <div class="stages__bottom">
                                <a href="{{ route('checkoutStages.stageShipping') }}" class="stages__back underline">Back to shipping</a>
                                <button type="submit" class="stages__forward accent-btn">Complete Order</button>
                            </div>
                        </form>
                    </div>
                </div>

            @include('Components.checkoutSideBar', ['cart' => $cart, 'shippingMethod' => session('checkoutStages.stageShipping.shipping_method')])
        </div>
    </section>
@endsection
