@section('content')
<main>
    <section>
        <div class="background">
            <div class="inner-box">
                <h1>All your candle needs satisfied</h1>
                <p>Take time to browse our select hand-crafted candles.
                    Enjoy your shopping experience with Storefront!
                </p>

                <button class="yellow-box">
                    Discover our collection
                </button>
            </div>
        </div>
    </section>

    <section>
        <div class="products-background">
            <div class="products">
                <h1>Products</h1>
                <p>Order it for you or for your beloved ones</p>
            </div>
        </div>
        <div>
            @foreach ($products as $product)
        <div class="listing-section">
           
                <div class="store-product">
                    <a href="/products/{{ $product->id }}">

                        <div class="image-box">
                            <div class="images" style="background-image: url('{{ asset($product->image) }}');"></div>
                        </div>
                        <div class="product-desc">

                            <p class="pr-item">Clean Lavander</p>
                            <p class="item-price">9.99$</p>

                            <h2 class="item">{{ $product->name }}</h2>
                            <h3 class="price">{{ number_format($product->price, 2) }}$</h3>

                        </div>
                    </a>
                </div>
        </div>
        @endforeach
        </div>

    </section>

    <section>
        <div class="deals-box">
          <div class="deals-left">
            <div class="deals-heading">
                <h2 class="deals-heading-h2">Exclusive deals <br> and offers</h2>
                <p class="deals-heading-p">Made for your convenience</p>
            </div>
            <div class="deals-list">
                <ul>
                    <li><img src="{{ asset('assets/check-sign.svg') }}" alt="check-icon" class="check-sign"><strong>Eco-sustainable:</strong>&nbsp;All recyclable materials, 0% CO2 emissions</li>
                    <li><img src="{{ asset('assets/check-sign.svg') }}" alt="check-icon" class="check-sign"><strong>Hypoallergenic:</strong>&nbsp;100% natural, human friendly ingredients</li>
                    <li><img src="{{ asset('assets/check-sign.svg') }}" alt="check-icon" class="check-sign"><strong>Trendy:</strong>&nbsp;Scents and designs as seen in latest trends</li>
                </ul>

            </div>
            <div class="deals-btn">
                <button>Learn more</button>
            </div>
          </div>
          <div class="deals-right"></div>
        </div>
    </section>
    <section class="testimonials">
        <div class="testimonials-heading">
            <h4 class="testimonials-heading-h4">Testimonials</h4>
            <p class="testimonials-heading-p">Some quotes from our happy customers</p>
        </div>
        <div class="testimonials-container">
            <div class="testimonials-container-box1">
                <img src="{{ asset('assets/person1.png') }}" alt="person" class="testimonials-person">
            </div>


            <div class="testimonials-container-box2">
                <img src="{{ asset('assets/person2.png') }}" alt="person" class="testimonials-person">
            </div>


            <div class="testimonials-container-box3">
                <img src="{{ asset('assets/person3.png') }}" alt="person" class="testimonials-person">
            </div>
        </div>
    </section>
</main>
@endsection
