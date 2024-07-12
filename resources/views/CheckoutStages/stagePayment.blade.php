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

    <section id="checkout" class="show-checkoutTotal-mob">
        <div class="container">

            <div class="stages">
                <div class="img__wrapper">
                    <img id="checkout-logo" src="./assets/Main-logo.svg" alt="logo" class="logo">

                </div>
                <div class="stages__wrapper">
                    @include ('Components.checkoutNavigation')
                    <div class="stages__content stages__content_payment">
                            <div class="stages__shipement-details">
                                <div class="stages__fancybox">
                                    <div class="stages__fancybox-item">
                                        <div>
                                            <p class="stages__fancybox-descr">Contact:</p>
                                            <p class="stages__text">example@gmail.com</p>
                                        </div>
                                        <p class="stages__edit underline">Edit</p>
                                    </div>
                                    <div class="stages__fancybox-item">
                                        <div>
                                            <p class="stages__fancybox-descr">Ship to:</p>
                                            <p class="stages__text">address data</p>
                                        </div>
                                        <p class="stages__edit underline">Edit</p>
                                    </div>
                                    <div class="stages__fancybox-item">
                                        <div>
                                            <p class="stages__fancybox-descr">Method:</p>
                                            <p class="stages__text">Standart Shipping - FREE</p>
                                        </div>
                                        <p class="stages__edit underline">Edit</p>
                                    </div>
                                </div>
                            </div>
                            <div class="stages__payment-method">
                                <p class="stages__sub">Payment method</p>
                                <div class="stages__card">
                                    <div class="stages__card-top">
                                        <img src="./assets/bank-card.svg" alt="card">
                                        Credit Card
                                    </div>
                                    <div class="stages__card-inputs">

                                        <input class="stages__input" placeholder="Card Number"></input>
                                        <input class="stages__input" placeholder="Holder Name"></input>
                                        <div class="stages__2input">
                                            <input class="stages__input" placeholder="Expiration (MM/YY)"></input>
                                            <input class="stages__input" placeholder="CVV"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="stages__tax">
                                <p class="stages__sub">Tax Informations</p>
                                <div class="stages__tax-inputs">
                                    <input class="stages__input" placeholder="VAT number (optional)"></input>
                                    <input class="stages__input" placeholder="PEC (optional)"></input>
                                </div>
                            </div>
                            <form class="stages__billing">
                                <p class="stages__sub">Billing information</p>
                                <div class="stages__fancybox">
                                    <div class="stages__fancybox-radio">
                                        <input id="stages_radio-3" name="billing-radio" type="radio">
                                        <label for="stages_radio-3">Same as the shipping address</label>
                                    </div>
                                    <div class="stages__fancybox-radio">
                                        <input id="stages_radio-4" name="billing-radio"type="radio">
                                        <label for="stages_radio-4">Use a different address for billing</label>
                                    </div>
                                </div>
                            </form>
                    </div>
                    <div class="stages__bottom">
                        <p class="stages__back underline">Back to shipping</p>
                        <button class="stages__forward accent-btn">Pay now</button>
                    </div>
                </div>
            </div>

            @include('Components.checkoutSideBar')
        </div>
    </section>
</body>

</html>
