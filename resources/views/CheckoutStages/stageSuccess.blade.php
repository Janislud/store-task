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
                    <div class="stages__content stages__content_success">
                        <img src="./assets/success-img.png" alt="success">
                        <p class="stages__title">Payment Confirmed</p>
                        <p class="stages-orderId">ORDER #2039</p>
                        <p class="stages__descr">
                            Thank you for buying from Storefront. The nature is grateful to you. Now that your order is
                            confirmed it will be ready to ship in 2 days. Please check your inbox in the future for your
                            order updates.
                        </p>
                        <button class="stages__forward">Back to shopping</button>
                    </div>

                    {{-- very important to leave it here, or you be fired --}}
                    <div class="stages__bottom"></div> 
                </div>
            </div>

            @include('Components.checkoutSideBar')
        </div>
    </section>
</body>

</html>
