@extends('layouts.layout')

@section('title', 'Profile')

@section('content')
<section id="cart">
    <div class="container">
        <h3 class="cart__title">Your cart items</h3>
        <a  class="cart__backLink underline" href="/products">Back to shopping</a>
        <div class="cart__wrapper">
            <div class="cart__cols">
                <div>Product</div>
                <div>Price</div>
                <div>Quantity</div>
                <div>Total</div>
            </div>
            @if(!empty($cart))
                @foreach ($cart as $productId => $item)
                    <div class="cart__item">
                        <div class="cart__item-main">
                            <img class="cart__item-img" src="{{ $item['photo'] }}" alt="{{ $item['name'] }}">
                            {{-- <img class="cart__item-img" src="#" alt="image">     --}}
                            <div>
                                <h4 class="cart__item-name">{{ $item['name'] }}</h4>
                                <form action="{{ route('cart.remove', $productId) }}" method="POST" class="cart__item-remove-form">
                                    @csrf
                                    <button type="submit" class="cart__item-remove underline">Remove</button>
                                </form>
                            </div>
                        </div>
                        <div class="cart__item-price">
                            <p class="cart__item-priceValue cart__item-priceValue-mob">Price: </p>
                            <p class="cart__item-priceValue">${{ $item['price'] }}</p>
                        </div>
                        <div class="cart__item-quantity">
                            <div class="cart__item-quantityToggle">
                                <button type="button" id="cart__item-plus" data-id="{{ $productId }}">+</button>
                                <p id="cart__item-quantityValue">{{ $item['quantity'] }}</p>
                                <button type="button" disabled="true" id="cart__item-minus" data-id="{{ $productId }}">-</button>
                            </div>
                        </div>

                        <div class="cart__item-total">
                            <p class="cart__item-priceValue cart__item-priceValue-mob">Total: </p>
                            <p class="cart__item-totalValue">${{ $item['quantity'] * $item['price'] }}</p>
                        </div>
                        </div>
                    </div>
                @endforeach

                <div class="cart__bottom">
                    <div class="cart__bottom-price">
                        <div>
                            <p class="cart__subTotal">Sub-total</p>
                            <p class="cart__value">${{ array_sum(array_map(fn($item) => $item['quantity'] * $item['price'], $cart)) }}</p>
                        </div>
                        <div>
                            Tax and shipping cost will be calculated later
                        </div>
                    </div>
                    <form action="{{ route('cart.checkout') }}" method="POST">
                        @csrf
                        <button class="cart__checkout-btn accent-btn" type="submit">Check-out</button>
                    </form>
                </div>
            @else
                <p>Your cart is empty!</p>
            @endif
    </div>
</section>

{{-- Import script to make product Quantity changable --}}
<script src="./js/amountToggler.js"></script>
@endsection
