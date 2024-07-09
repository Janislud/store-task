<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
</head>
<body>
    @include('Components.navigation')
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    section#cart {
        font-family: "Roboto", sans-serif;
        color: rgb(39, 39, 39);
    }
    section#cart p {
        font-weight: 500;
    }

    section#cart .container {
        max-width: 1110px;
        width: 100%;
        margin: 0 auto;
    }

    section#cart .cart__title {
        margin: 0;

        font-family: "Poppins", sans-serif;
        text-align: center;
        font-size: 26px;

        font-weight: 500;

        line-height: 57.6px;
    }

    section#cart .cart__backLink {
        margin: 0 auto;
        margin-top: 18px;
        color: rgb(204, 164, 59);
        font-family: "Roboto";
        display: block;
        font-size: 18px;
        font-weight: 400;
        line-height: 25.6px;
        letter-spacing: -0.9px;
        text-align: center;
        text-decoration-line: underline;
    }

    section#cart .cart__wrapper {
        margin-top: 45px;
    }

    section#cart .cart__cols {
        display: flex;
        padding: 15px 0px;

        border-bottom: 1px solid rgb(229, 229, 229);
        color: rgb(39, 39, 39);
        font-size: 16px;
        font-weight: 500;
        line-height: 25.6px;
        letter-spacing: -0.9px;
    }

    section#cart .cart__cols div:nth-child(1) {
        flex-basis: 400%;
    }
    section#cart .cart__cols div:nth-child(2) {
        flex-basis: 100%;
    }
    section#cart .cart__cols div:nth-child(3) {
        flex-basis: 100%;
    }
    section#cart .cart__cols div:nth-child(4) {
        flex-basis: 100%;
    }

    section#cart .cart__item {
        display: flex;
        align-items: center;
        padding: 30px 0px;
        min-height: 130px;
    }

    section#cart .cart__item .cart__item-main {
        flex-basis: 400%;
        display: flex;
        gap: 30px;
    }
    section#cart .cart__item .cart__item-price {
        flex-basis: 100%;
    }
    section#cart .cart__item .cart__item-quantity {
        text-align: center
        flex-basis: 100%;
    }
    section#cart .cart__item .cart__item-total {
        flex-basis: 100%;
        text-align: right
    }

    section#cart .cart__item .cart__item-name {
        margin: 0;
        font-size: 26px;
        font-weight: 500;
    }

    section#cart .cart__item .cart__item-img {
        width: 160px;
        height: 120px;
        background: gray;
        border: none;
    }

    section#cart .cart__item .cart__item-remove {
        margin: 0;
        color: rgb(204, 164, 59);
        font-size: 18px;
        font-weight: 400;
        line-height: 25.6px;
        text-align: left;
        text-decoration-line: underline;
    }
</style>
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
                    <p class="cart__item-priceValue">$9.99</p>
                </div>
                <div class="cart__item-quantity">
                    <div class="cart__item-quantityToggle">
                        <p id="cart__item-minus">+</p>
                        <p id="cart__item-quantityValue">1</p>
                        <p id="cart__item-minus">-</p>
                    </div>
                </div>
                <div class="cart__item-total">
                    <p class="cart__item-totalValue">$9.99</p>
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
            {{-- <a href="/test">test</a> --}}
        </div>
    </div>
</section>
</body>

