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
        <div  class="testimonials-container swiper2">
            <div class="swiper-wrapper">
                <div class="testimonials-container-box swiper-slide">
                    <img src="{{ asset('assets/person1.png') }}" alt="person" class="testimonials-person">
                    <h4 class="testimonials-comment">“I love it!”</h4>
                    <p>Liv</p>
                </div> 
                <div class="testimonials-container-box swiper-slide">
                    <img src="{{ asset('assets/person2.png') }}" alt="person" class="testimonials-person">
                    <h4 class="testimonials-comment">“Reccomended for everyone”</h4>
                    <p>Marco</p>
                </div>
                <div class="testimonials-container-box swiper-slide">
                    <img src="{{ asset('assets/person3.png') }}" alt="person" class="testimonials-person">
                    <h4 class="testimonials-comment">“Great product”</h4>
                    <p>Charli</p>
                </div>
                <div class="testimonials-container-box swiper-slide">
                    <img src="{{ asset('assets/person4.png') }}" alt="person" class="testimonials-person">
                    <h4 class="testimonials-comment">“Captivating smell”</h4>
                    <p>Myke</p>
                </div>
                <div class="testimonials-container-box swiper-slide">
                    <img src="{{ asset('assets/person5.png') }}" alt="person" class="testimonials-person">
                    <h4 class="testimonials-comment">“My partner loved it!”</h4>
                    <p>Kira</p>
                </div>
                <div class="testimonials-container-box swiper-slide">
                    <img src="{{ asset('assets/person6.png') }}" alt="person" class="testimonials-person">
                    <h4 class="testimonials-comment">“Never dissapoints”</h4>
                    <p>James</p>
                </div>
                    <div class="testimonials-container-box swiper-slide">
                    <img src="{{ asset('assets/person7.png') }}" alt="person" class="testimonials-person">
                    <h4 class="testimonials-comment">“Pleasant smell in the room for so long”</h4>
                    <p>Lola</p>
                </div>
                <div class="testimonials-container-box swiper-slide">
                    <img src="{{ asset('assets/person8.png') }}" alt="person" class="testimonials-person">
                    <h4 class="testimonials-comment">“Exceptional quality!”</h4>
                    <p>Kate</p>
                </div>
                    <div class="testimonials-container-box swiper-slide">
                    <img src="{{ asset('assets/person9.png') }}" alt="person" class="testimonials-person">
                    <h4 class="testimonials-comment">“Great, as always”</h4>
                    <p>Jenny</p>
                </div>
                <div class="testimonials-container-box swiper-slide">
                    <img src="{{ asset('assets/person10.png') }}" alt="person" class="testimonials-person">
                    <h4 class="testimonials-comment">“Melted my heart”</h4>
                    <p>Juan</p>  
                </div>
                    
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            

        </div>
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
</main>
@section('scripts')
@endsection