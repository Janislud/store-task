@extends('layouts.layout')

@section('title', 'Profile')

@section('content')
<section id="cart">
    <div class="container">
        <h3 class="cart__title">Your cart items</h3>
        <a  class="cart__backLink"="#">Back to shopping</a>
        <div class="cart__wrapper">
            <div class="cart__cols">
                <div>Product</div>
                <div>Price</div>
                <div>Quantity</div>
                <div>Total</div>
            </div>

            <div class="cart__item">
                <div class="cart__item-main">
                    <img class="cart__item-img" src="#" alt="image">
                    <div>
                        <h4 class="cart__item-name">Spiced Mint Candleaf</h4>
                        <p class="cart__item-remove">Remove</p>
                    </div>
                </div>
                <div class="cart__item-price">
                    <p class="cart__item-priceValue cart__item-priceValue-mob">Price: </p>
                    <p class="cart__item-priceValue">$9.99</p>
                </div>
                <div class="cart__item-quantity">
                    <div class="cart__item-quantityToggle">
                        <button type="button" id="cart__item-plus">+</button>
                        <p id="cart__item-quantityValue">1</p>
                        <button type="button" disabled="true" id="cart__item-minus">-</button>
                    </div>
                </div>
                <div class="cart__item-total">
                    <p class="cart__item-priceValue cart__item-priceValue-mob">Total: </p>
                    <p class="cart__item-totalValue">$9.99</p>
                </div>
            </div>
            <div class="cart__item">
                <div class="cart__item-main">
                    <img class="cart__item-img" src="#" alt="image">
                    <div>
                        <h4 class="cart__item-name">Spiced Mint Candleaf</h4>
                        <p class="cart__item-remove">Remove</p>
                    </div>
                </div>
                <div class="cart__item-price">
                    <p class="cart__item-priceValue cart__item-priceValue-mob">Price: </p>
                    <p class="cart__item-priceValue">$9.99</p>
                </div>
                <div class="cart__item-quantity">
                    <div class="cart__item-quantityToggle">
                        <button disabled="true" type="button" id="cart__item-plus">+</button>
                        <p id="cart__item-quantityValue">5</p>
                        <button type="button" id="cart__item-minus">-</button>
                    </div>
                </div>
                <div class="cart__item-total">
                    <p class="cart__item-totalValue cart__item-totalValue-mob">Total: </p>

                    <p class="cart__item-totalValue">$29.99</p>
                </div>
            </div>
        </div>
        <div class="cart__bottom">
            <div class="cart__bottom-price">
                <div>
                    <p class="cart__subTotal">Sub-total</p>
                    <p class="cart__value">$9.99</p>
                </div>
                <div>
                    Tax and shipping cost will be calculated later
                </div>
                <div></div>
            </div>
            <button class="cart__checkout-btn">Check-out</button>
        </div>
    </div>
</section>
@endsection