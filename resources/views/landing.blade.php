@extends('layouts.layout')

@section('title', 'Product page')

@section('content')
<main>
    <section>
        <div class="background">
            <div class="inner-box">
                <h1 class="top-heading-h2">All your candle needs satisfied</h1>
                <p class="top-heading-p">Take time to browse our select candles crafted with care and attention
                </p>
                <a class="yellow-box" href="/products">
                        Discover our collection
                </a>
            </div>
        </div>
    </section>
    <section>

        <div class="product-section-wrapper">
            <div class="products">
                <h1 class="top-heading-h2">Products</h1>
                <p class="top-heading-p">Order it for you or your beloved ones</p>
            </div>
        </div>

    </section>

    <section class="conteiner">
        <div class="products-wrapper-conteiner">
        @foreach ($sliced as $product)
            <div class="listing-section">
                    <a class="product-card-link" href="/products/{{ $product->id }}">
                                <img class="images" src="{{ $product->photos[0]->image_url }}" alt="{{ $product->photos[0]->title }}"></img>
                        <div class="product-desc">
                            <h2 class="item">{{ $product->name }}</h2>
                            <h3 class="price">{{ number_format($product->price, 2) }}$</h3>
                        </div>
                    </a>
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
                    <li><img src="{{ asset('assets/check-sign.svg') }}" alt="check-icon" class="check-sign"><p class="bold-text">Eco-sustainable:</p>&nbsp;All recyclable materials, 0% CO2 emissions</li>
                    <li><img src="{{ asset('assets/check-sign.svg') }}" alt="check-icon" class="check-sign"><p class="bold-text">Hypoallergenic:</p>&nbsp;100% natural, human friendly ingredients</li>
                    <li><img src="{{ asset('assets/check-sign.svg') }}" alt="check-icon" class="check-sign"><p class="bold-text">Trendy:</p>&nbsp;Scents and designs as seen in latest trends</li>
                </ul>
            </div>
            <div>
                <a href="/deals" class="yellow-box-btn {{ request()->is('deals') ? 'active' : '' }}">Learn more</a>
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
        <div class="testimonials-container testimonials-swiper">
            <div class="swiper-wrapper"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <section>
        <div class="container-popular">
            <div>
                <h1 class="top-heading-h2">Popular</h1>
                <p class="top-heading-p">Our top selling product that you may like</p>
            </div>
        </div>
        <div class="products-wrapper-conteiner">
            @foreach ($sliced as $product)
                <div class="listing-section">
                        <a class="product-card-link" href="/products/{{ $product->id }}">
                                    <img class="images" src="{{ $product->photos[2]->image_url }}" alt="{{ $product->photos[2]->title }}"></img>
                            <div class="product-desc">
                                <h2 class="item">{{ $product->name }}</h2>
                                <h3 class="price">{{ number_format($product->price, 2) }}$</h3>
                            </div>
                        </a>
                </div>
            @endforeach
    </section>
    <section>
        <div class="faq-section" id="faq">
            <div class="faq-container">
                <div class="faq-header">
                    <h1 class="faq-title-underline">Do You have Questions?</h1>
                    <p class="faq-subtitle">We have answers (well, most of the times!)</p>
                </div>
                <div class="faq-content-wrapper">
                    <button type="button" class="faq-collapsible"><h2 class="faq-collapsible-title">What types of candles do you offer?</h2></button>
                    <div class="faq-content">
                        <p>We offer a wide variety of candles, including soy candles, beeswax candles, paraffin candles, scented candles, 
                        unscented candles, pillar candles, votive candles, and tea lights. Each type is crafted to cater to different preferences and needs.</p>
                    </div>
                    <button type="button" class="faq-collapsible"><h2 class="faq-collapsible-title">Are your candles eco-friendly?</h2></button>
                    <div class="faq-content">
                        <p>Yes, our candles are made from natural, renewable resources such as soy and beeswax. We also use lead-free cotton wicks and phthalate-free
                        fragrances to ensure our products are environmentally friendly.</p>
                    </div>
                    <button type="button" class="faq-collapsible"><h2 class="faq-collapsible-title">How long do your candles burn?</h2></button>
                    <div class="faq-content">
                        <p>Burn time varies depending on the size and type of the candle. 
                        Our standard-sized candles typically burn for 30 to 50 hours. For detailed burn times, please refer to the product description of each candle.</p>
                    </div>
                    <button type="button" class="faq-collapsible"><h2 class="faq-collapsible-title">Do you have a return policy?</h2></button>
                    <div class="faq-content">
                        <p>Yes, we have a hassle-free return policy. If you are not completely satisfied with your purchase, you can return the candle within 30 days for a full refund or exchange.
                             Please refer to our return policy page for more details.</p>
                    </div>
                    <button type="button" class="faq-collapsible"><h2 class="faq-collapsible-title">Do you offer gift wrapping services?</h2></button>
                    <div class="faq-content">
                        <p>Yes, we offer complimentary gift wrapping for all orders. Simply select the gift 
                            wrapping option at checkout, and your candles will arrive beautifully wrapped and ready to gift.</p>
                    </div>
                    <button type="button" class="faq-collapsible"><h2 class="faq-collapsible-title">What should I do if my candle is damaged during shipping?</h2></button>
                    <div class="faq-content">
                        <p>If your candle arrives damaged, please contact our customer service team within 7 days of receiving your order. We will arrange for a replacement or refund promptly.</p>
                    </div>
                    <div class="faq-thanks-container">
                    <p class="faq-thanks">Thank you for choosing Storefront! 😊🙏🏾</p>
                    </div>
                </div>
            </div>
        </div>
    
        <script>
            var coll = document.getElementsByClassName("faq-collapsible");
            var i;
    
            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("faq-active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                });
            }
        </script>
    </section>
</main>
@endsection