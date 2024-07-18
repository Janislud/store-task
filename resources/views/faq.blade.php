@extends('layouts.layout')

@section('title', 'Faq')

@section('content')

<main>
    <section>
        <div class="faq-section" id="faq">
            <div class="faq-container">
                <div class="faq-header">
                    <h2 class="faq-title-underline">Do You have Questions?</h1>
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