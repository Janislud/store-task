@extends('layouts.layout')

@section('title', 'Profile')

@section('content')
    <section id="cart">
        <div class="container">
            <h3 class="cart__title">Your cart items</h3>
            <a class="cart__backLink underline" href="/products">Back to shopping</a>
            <div class="cart__wrapper">
                <div class="cart__cols">
                    <div>Product</div>
                    <div>Price</div>
                    <div>Quantity</div>
                    <div>Total</div>
                </div>
            </div>
            @if (!empty($cart))
                @foreach ($cart as $productId => $item)
                    <div class="cart__item">
                        <div class="cart__item-main">
                            <img class="cart__item-img" src="{{ $item['photo'] }}" alt="{{ $item['name'] }}">
                            <div>
                                <h4 class="cart__item-name">{{ $item['name'] }}</h4>
                                <form action="{{ route('cart.remove', $productId) }}" method="POST"
                                    class="cart__item-remove-form">
                                    @csrf
                                    <button type="submit" class="cart__item-remove underline">Remove</button>
                                </form>
                            </div>
                        </div>
                        <div class="cart__item-price">
                            <p class="cart__item-priceValue cart__item-priceValue-mob">Price: </p>
                            <p class="cart__item-priceValue">${{ $item['price'] }}</p>
                        </div>

                        {{-- SALABOT UN IZDOMĀT LOĢIKU LĪDZ GALAM!!!!!!! --}}
                        {{-- <div data-id={{$productId}} onclick="dynamicReCalc(event, {{$productId}}, {{$item['price']}})" class="cart__item-quantity">
                            @include('Components.amountToggler', ['productId' => $productId])
                        </div> --}}
                        <div class="cart__item-quantity">
                            <form id="form-{{$productId}}" onclick="submitCartForm({{$productId}})" action="{{ route('cart.update', $productId) }}" method="POST" class="cart__item-quantity-form">
                                @csrf
                                 <input type="hidden" id="quantity" name="quantity" value={{$item["quantity"]}} min="1">
                                 <div>
                                    @include('Components.amountToggler', [
                                        'productId' => $productId,
                                        'item' => ['quantity' => $item['quantity']],
                                    ])
                                </div>
                            </form>
                        </div>

                        <div class="cart__item-total">
                            <p class="cart__item-priceValue cart__item-priceValue-mob">Total: </p>
                            <p id="cart__item-total-{{$productId}}" class="cart__item-totalValue">${{ $item['quantity'] * $item['price'] }}</p>
                        </div>
                    </div>
                @endforeach

                <div class="cart__bottom">
                    <div class="cart__bottom-price">
                        <div>
                            <p class="cart__subTotal">Total</p>
                            <p class="cart__value">
                                ${{ array_sum(array_map(fn($item) => $item['quantity'] * $item['price'], $cart)) }}</p>
                        </div>
                        <div>
                            Shipping cost will be calculated later
                        </div>
                    </div>
                    <form action="{{ route('checkoutStages.stageDetails') }}" method="GET">
                        <button class="cart__checkout-btn accent-btn" type="submit">Check-out</button>
                    </form>
                </div>
            @else
                <p>Your cart is empty!</p>
            @endif
        </div>
    </section>

    <script>
        function submitCartForm(id) {
            const form = document.querySelector(`#form-${id}`);
            console.log(form)
            console.log(`#form-${id}`);
            const input = form.querySelector("input#quantity");
            const value = form.querySelector("#amountToggler-quantityValue").textContent;
            input.value = value;
            form.submit();
        }
    </script>
    {{-- <script>
        function dynamicReCalc(e, id, price) {
            const value = document.querySelector(`.cart__item-quantity[data-id='${id}'] #amountToggler-quantityValue`).textContent;
            const productTotal = document.querySelector(`#cart__item-total-${id}`);
            const cartTotal = document.querySelector(".cart__bottom-price .cart__value");

            const newValue = (+price * + value).toFixed(2);

            productTotal.textContent = `$${newValue}`;

            console.log()

            cartTotal.textContent = `
            $
                ${
                    [
                        ...document.querySelectorAll(".cart__item-totalValue")
                    ].
                    map(item => item.textContent.slice(1)).
                    reduce((a, c) => a += +c, 0).
                    toFixed(2)
                }
            `;
        }
    </script> --}}
@endsection
