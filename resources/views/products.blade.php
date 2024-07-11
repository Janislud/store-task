@extends('layouts.layout')

@section('title', 'Products')

@section('content')

    <div class="pr-container">
        <header>
            <h1>Products</h1>
            <h2>Order it for you or for your beloved ones </h2>
            <div class="search">
                <input class="pr-searchbar" type="text" placeholder="Search"></input>
                <button type="submit" value="search">&nbsp;</button>
            </div>
        </header>
        <div class="listing-section">
            <div class="store-product">
                <div class="image-box">
                    <div class="images" id="image-1"></div>
                </div>
                <div class="product-desc">
                    <p class="pr-item">Spiced Mint</p>
                    <h3 class="pr-price">9.99$</h3>
                </div>
            </div>
        <div class="store-product">
            <div class="image-box">
                <div class="images" id="image-2"></div>
            </div>
            <div class="product-desc">
                <p class="pr-item">Sweet Strawberry</p>
                <h3 class="pr-price">9.99$</h3>
            </div>
        </div>
        <div class="store-product">
            <div class="image-box">
                <div class="images" id="image-3"></div>
            </div>
            <div class="product-desc">
                <p class="pr-item">Cool Blueberries</p>
                <h3 class="pr-price">9.99$</h3>
            </div>
        </div>
        <div class="store-product">
            <div class="image-box">
                <div class="images" id="image-4"></div>
            </div>
            <div class="product-desc">
                <p class="pr-item">Juicy Lemon</p>
                <h3 class="pr-price">9.99$</h3>
            </div>
        </div>
        <div class="store-product">
            <div class="image-box">
                <div class="images" id="image-5"></div>
            </div>
            <div class="product-desc">
                <p class="pr-item">Fresh Orange</p>
                <h3 class="pr-price">9.99$</h3>
            </div>
        </div>
        <div class="store-product">
            <div class="image-box">
                <div class="images" id="image-6"></div>
            </div>
            <div class="product-desc">
                <p class="pr-item">Fragrant Cinnamon</p>
                <h3 class="pr-price">9.99$</h3>
            </div>
        </div>
        <div class="store-product">
            <div class="image-box">
                <div class="images" id="image-7"></div>
            </div>
            <div class="product-desc">
                <p class="pr-item">Summer Cherries</p>
                <h3 class="pr-price">9.99$</h3>
            </div>
        </div>
        <div class="store-product">
            <div class="image-box">
                <div class="images" id="image-8"></div>
            </div>
            <div class="product-desc">
                <p class="pr-item">Clean Lavander</p>
                <h3 class="pr-price">9.99$</h3>
            </div>
        </div>
    </div>
</div>

@endsection
