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
        section#cart > * {
            box-sizing: border-box;
        }
        
        section#cart {
            font-family: "Roboto", sans-serif;
            color: rgb(39, 39, 39);
        }
        section#cart p {
            font-weight: 500;
            margin: 0;
        }

        section#cart button {
            cursor: pointer;
            border: none;
            outline: none;
            background: none;
            font-size: 18px;
        }

        section#cart .container {
            max-width: 1110px;
            width: 100%;
            margin: 0 auto;
            padding: 0px 15px;
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
            text-align: center;
        }
        section#cart .cart__cols div:nth-child(4) {
            flex-basis: 100%;
            text-align: right;
        }

        section#cart .cart__item {
            display: flex;
            align-items: center;
            padding: 30px 0px;
            min-height: 130px;
            border-bottom: 1px solid rgb(229, 229, 229);
        }

        section#cart .cart__item .cart__item-main {
            flex-basis: 400%;
            display: flex;
            gap: 30px;
        }
        section#cart .cart__item .cart__item-price {
            flex-basis: 100%;
            display: flex;
            gap: 8px;
        }
        section#cart .cart__item .cart__item-quantity {
            text-align: center;
            display: flex;
            justify-content: center;
            flex-basis: 100%;
        }
        section#cart .cart__item .cart__item-total {
            flex-basis: 100%;
            justify-content: flex-end;
            display: flex;
            gap: 8px;
        }

        section#cart .cart__item .cart__item-name {
            margin: 0;
            font-size: 26px;
            font-family: "Poppins", sans-serif;
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
        
        
        section#cart .cart__item .cart__item-quantityToggle {
            border: 1px solid rgb(204, 164, 59);
            padding: 2px 5px;
            width: 75px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        section#cart #cart__item-minus, #cart__item-plus {
            color: rgb(204, 164, 59);
        }

        section#cart #cart__item-minus:disabled, #cart__item-plus:disabled  {
            color: black;
        }

        section#cart .cart__bottom {
            display: flex;
            justify-content: flex-end;
            align-items: flex-start;
            padding: 50px 0px;
            gap: 70px;
        }

        section#cart .cart__bottom-price {
            display: flex;
            flex-direction: column;
            align-items: flex-end
        }

        section#cart .cart__bottom-price div:nth-child(1) {
            display: flex;
            justify-content: space-between;
            max-width: 200px;
            width: 100%;
        }
        section#cart .cart__bottom-price div:nth-child(1) p {
            display: flex;
            font-size: 20px;
            color: rgb(39, 39, 39);
            font-weight: 500;
            line-height: 25.6px;
        }

        section#cart .cart__bottom-price div:nth-child(2) {
            margin: 10px;
            text-align: right;
            color: rgb(158, 158, 158);
            font-size: 16px;
            font-weight: 400;
            line-height: 25.6px;
        }

        section#cart .cart__checkout-btn {
            border-radius: 4px;
            padding: 8px 44px 8px 44px;
            background: rgb(204, 164, 59);
            color: rgb(255, 255, 255);
            font-size: 20.65px;
            font-weight: 500;
            line-height: 24px;
            letter-spacing: 0px;
        }

        section#cart .cart__item-totalValue-mob, .cart__item-priceValue-mob {
            display: none;
        }

        @media (max-width: 1200px) {
            section#cart .cart__bottom {
                justify-content: center;
                align-items: center;
                flex-direction: column;
                gap: 10px;
            }
            section#cart .cart__bottom-price div:nth-child(1) {
                max-width: 100%;
                justify-content: center;
                gap: 20px;
            }
          
        }
        @media (max-width: 768px) {
            section#cart .cart__item-remove {
                font-size: 16px!important;
            }
            section#cart .cart__cols {
                display: none;
            }
            section#cart .cart__wrapper {
                border-top: 1px solid rgb(229, 229, 229);
            }
            section#cart .cart__item {
                flex-direction: column;
            }
            section#cart .cart__item-main {
                flex-direction: column-reverse;
                align-items: center;
            }
            section#cart .cart__item-main div p {
                margin-top: 10px!important;
                text-align: center!important;
            }
            section#cart .cart__item .cart__item-name {
                font-size: 20px;
            }
            section#cart .cart__item-price {
                margin-top: 20px;
            }
            section#cart .cart__item-quantity {
                margin-top: 20px;
            }
            section#cart .cart__item-total {
                margin-top: 20px;
            }
            section#cart .cart__bottom-price div:nth-child(2) {
                text-align: center;
            }
            section#cart .cart__item-totalValue-mob, .cart__item-priceValue-mob {
                display: block;
            }
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
            {{-- <a href="/test">test</a> --}}
        </div>
    </div>
</section>
</body>
