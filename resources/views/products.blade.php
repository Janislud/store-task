@extends('layouts.layout')

@section('title', 'Products')

@section('content')
    <div class="pr-container">
        <section class="order-description">
            <h1>Products</h1>
            <h2>Order it for you or for your beloved ones </h2>
            <div class="search">
                <input class="pr-searchbar" type="text" placeholder="Search"></input>
                <button type="submit" value="search">&nbsp;</button>
            </div>
        </section>

        <section class="conteiner">
            <div class="products-wrapper-conteiner">
            @foreach ($products as $product)
                <div class="listing-section">
                        <a class="product-card-link" href="/products/{{ $product->id }}">
                                <img class="images" style="background-image: url('{{ asset($product->image) }}');">
                            <div class="product-desc">
                                <h2 class="item">{{ $product->name }}</h2>
                                <h3 class="price">{{ number_format($product->price, 2) }}$</h3>
                            </div>
                        </a>
                </div>
            @endforeach
            </div>
    
        </section>
        
@endsection
