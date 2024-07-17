@extends('layouts.layout')

@section('title', 'About')

@section('content')
    <div class="about" id="about">
        <div class="container">
            <div class="about__head">
                <h1 class="underline">About Us</h1>
                <p>Welcome to Storefront, your one-stop shop for handcrafted, custom candles! We're passionate about creating
                    unique
                    and beautiful candles that fill your home with delightful scents and warm ambiance.</p>
            </div>
            <div class="about__wrapper">
                <div class="about__wrapper-item">
                    <p class="about__sub">Our story</p>
                    <div class="about__text">
                        Storefront was born from a love of fragrance and a desire to create something special. We believe that
                candles
                are more than just lighting; they're a way to set a mood, evoke memories, and create a sense of well-being.
                    </div>
                </div>
                <div class="about__wrapper-item">
                    <p class="about__sub">Quality</p>
                    <div class="about__text">
                        We use only the finest ingredients in our candles, including natural soy wax and premium fragrance oils. We
                hand-pour every candle in small batches, ensuring the highest quality and attention to detail.
                    </div>
                </div>
                <div class="about__wrapper-item">
                    <p class="about__sub">Customization</p>
                    <div class="about__text">
                        What sets us apart is our dedication to customization. We believe that your candle should reflect your unique
                style and preferences. Choose from a wide variety of scents, jar styles, and even personalize your candle
                with a
                custom message.
                    </div>
                </div>
                <div class="about__wrapper-item">
                    <p class="about__sub">More Than Candles</p>
                    <div class="about__text">Storefront isn't just about candles. We offer a curated selection of home fragrance accessories and gifts,
                        making
                        us your one-stop shop for creating a warm and inviting atmosphere in your home.</div>
                </div>
                <div class="about__wrapper-item">
                    <p class="about__sub">Join the Family</p>
                    <div class="about__text">We invite you to explore our collection and discover the perfect candle to brighten your day. We're committed
                        to
                        providing exceptional customer service and creating a truly unique candle experience.</div>
                </div>
            </div>
           
            <p class="about__thanks">Thank you for choosing Storefront! 😊🙏🏾</p>

        </div>
    </div>
    <script>
        // for styling purposes script
        const isScreenLessThan = (num) => window.innerWidth <= num;

        const allCards = document.querySelectorAll(".about__wrapper-item");
        isScreenLessThan(1000) ? allCards[0].dataset.hovered = "true" : allCards[2].dataset.hovered = "true";

        document.querySelector(".about__wrapper").addEventListener("mouseover", (e) => {
            if (e.target.classList.contains("about__wrapper-item")) {
                document.querySelector('.about__wrapper-item[data-hovered="true"]').removeAttribute("data-hovered")
            }
        })
    </script>
@endsection
