@extends('layouts.layout')

@section('title', 'Deals')

@section('content')
    <div class="about" id="about">
        <div class="deals-container">
                <div class="about__head">
                    <h1 class="underline">Deals</h1>
                    <p>At Storefront, we believe everyone deserves a touch of candlelit magic. That's why we're thrilled to offer a variety of deals and promotions to help you fill your home with the glow of handcrafted goodness at a delightful price.</p>
                </div>
            <div class="deals-wrapper">

                <button type="button" class="deals-collapsible"><h2>Current Offers:</h2></button>
                <div class="deals-content">
                    <strong>Scent of the Month Discount (15% off):</strong> 
                    <p>Each month, we'll highlight a special fragrance with a tempting discount. Be sure to check back and discover your new favorite scent!</p>
                    <strong>New Customer Welcome (10% off): </strong><p>Welcome to the Storefront family! Use code WELCOME10 at checkout to receive 10% off your first purchase.</p>
                    <strong>Bulk Buy Savings (10% off): </strong><p>Stock up on your favorite scents! Buy 3 or more candles and save 10% with code BULKCANDLE.</p>
                    <strong>Free Shipping on Orders Over $50: </strong>
                    <p>Enjoy the convenience of free shipping on all domestic orders over $50. Sit back, relax, and let the candles come to you!</p>
                </div>
                <div></div>
                <button type="button" class="deals-collapsible"><h2>Stay in the Light:</h2></button>
                <div class="deals-content">
                    <strong>Subscribe & Save (15% off): </strong>
                    <p>Never run out of your favorite scents again! Sign up for our subscription service and enjoy 15% off your chosen candles delivered straight to your door at regular intervals.</p>
                    <strong>Join our Candle Club (Exclusive Offers & Early Access): </strong>
                    <p>Become a Storefront Candle Club member and unlock a world of exclusive benefits. Enjoy members-only discounts, early access to new releases, and invitations to special events. Sign up on our website today!</p>
                </div>
            <button type="button" class="deals-collapsible"><h2>Flash Sales & Promotions:</h2></button>
            <div class="deals-content">
                <ul>
                    <li><strong>Keep your eye out </strong>for our exciting flash sales and limited-time promotions throughout the year. We love surprising our customers with special deals, so be sure to follow us on social media and subscribe to our newsletter to stay in the loop!</li>
                    <li><strong>Looking for the perfect present? </strong>Throughout the year, we may offer special gift-with-purchase promotions. It's a great way to treat yourself or surprise a loved one with a touch of Storefront magic.</li>
                    <li><strong>We're constantly striving </strong>to bring you the best deals and offers on our handcrafted candles. Be sure to check back often to discover new ways to save and fill your home with the beautiful glow and delightful scents of Storefront!</li>
                </ul>
            </div>
                <p class="about__thanks">Thank you for choosing Storefront! 😊🙏🏾</p>
        </div>
    </div>

<script>
        var coll = document.getElementsByClassName("deals-collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("deals-active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
            content.style.display = "none";
            } else {
            content.style.display = "block";
            }
        });
        } 
</script>
@endsection
