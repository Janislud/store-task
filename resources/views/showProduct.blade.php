@extends('layouts.layout')

@section('title', 'Product page')

@section('content')
    <div class="pdp__content">

        <div class="container">
            <div class="pdp__slider">
                <div class="pdp__slider-wrapper swiper">
                    <div class="swiper-wrapper">
                        @foreach ($product->photos as $photo)
                            <div class="swiper-slide">
                                <img src="{{ $photo->image_url }}" alt="">
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="headline">Selected with care for best customer experience</div>
                <div class="shipping">🚚 FREE SHIPPING</div>
            </div>
            <div class="pdp__details">
                <h1>{{ $product->name }}</h1>
                <p class="pr-price">${{ $product->price }}</p>

                {{-- SALABOT +/- ielikt grozā --}}

                <div class="pdp__amount">
                    <p class="quantity">Quantity</p>
                    @include('Components.amountToggler', [
                        'productId' => 'HARDCODED_ID',
                        'item' => ['quantity' => 1],
                    ])
                </div>

                <div class="pdp__addAddToCart">
                    <form action="{{ route('cart.add', ['id' => $product->id]) }}" method="POST" id="cart-form">
                        @csrf
                        <input type="hidden" id="quantity" name="quantity" value="1" min="1">
                        <button class="yellow-box cart-btn accent-btn" onclick="submitForm()" type="button">Add to Cart</button>
                    </form>
                </div>

                <script>
                    function submitForm() {
                        const quantity = document.getElementById('amountToggler-quantityValue').textContent;
                        const form = document.getElementById('cart-form');
                        const hiddenInput = document.querySelector("input#quantity");
                        hiddenInput.value = quantity;
                        form.submit();
                    }
                </script>


                <form class="subscr-form">
                    <div class="enhanced-radio">
                        <input type="radio" class="radio" name="subscription" id="choice1" value="onetime"
                            checked></input>
                        <span class="radio-look"></span>
                        <label class="form-control">One time purchaise</label>
                    </div>
                    <div class="subsrc-radio">
                        <div class="enhanced-radio">
                            <input type="radio" class="radio" name="subscription" id="choice2"
                                value="repeated"></input>
                            <span class="radio-look"></span>
                            <label class="form-control">Subscribe for auto-delivery </label>
                        </div>
                        <select>
                            <option value="4-weeks">4 weeks</option>
                            <option value="8-weeks">8 weeks</option>
                            <option value="16-weeks">16 weeks</option>
                        </select>
                    </div>
                </form>
                <p class="subscr-details">Subscribe now and get the 10% of discount on every recurring order. The
                    discount will be applied at checkout.</p>
                <p class="description">{{ $product->description }}</p>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
@endsection
