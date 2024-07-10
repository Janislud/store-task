<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/checkout.css">
</head>

<body>

    <section id="checkout">
        <div class="container">

            <div class="stages">
                <div class="img__wrapper">
                    <img id="checkout-logo" src="./assets/Main-logo.svg" alt="logo" class="logo">

                </div>
                <div class="stages__wrapper">
                    @include ('Components.checkoutNavigation')
                    <div class="stages__content">
                        <div class='stages__contact'>
                            <div class="stages__contact-row">
                                <p class="stages__sub">Contact</p>
                                <div class="stages__acount-check">
                                    <p class="order__text">Do you have an account?</p>
                                    <p class="order__text">Login</p>
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
                        <div class="stages__bottom">
                            <p class="stages__back">Back to cart</p>
                            <button class="stages__forward">Go to shipping</button>
                        </div>
                    </div>
                </div>
            </div>

            @include('Components.checkoutSideBar')
        </div>
    </section>
</body>

</html>