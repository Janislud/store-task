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
                        <div class="stages__shipping-details">
                            <div class="stages__fancybox">
                                <div class="stages__fancybox-item">
                                    <div>
                                        <p class="stages__fancybox-descr">Contact:</p>
                                        <p class="stages__text">{{ $userEmail }}</p>
                                    </div>
                                    <p class="stages__edit">Edit</p>
                                </div>
                                <div class="stages__fancybox-item">
                                    <div>
                                        <p class="stages__fancybox-descr">Ship to:</p>
                                        <p class="stages__text">{{ $shippingAddress }}</p>
                                    </div>
                                    <p class="stages__edit">Edit</p>
                                </div>
                            </div>
                        </div>
                        <div class="stages__shipping-method">
                            <p class="stages__sub">Shipping method</p>
                            <div class="stages__fancybox">
                                <div class="stages__fancybox-radio">
                                    <input type="radio" id="1">
                                    <label for="1">
                                        <p>Standart Shipping</p>
                                        <p>Free</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stages__bottom">
                        <p class="stages__back">Back to details</p>
                        <button class="stages__forward">Go to payment</button>
                    </div>
                </div>
            </div>

            @include('Components.checkoutSideBar')
        </div>
    </section>
</body>

</html>
