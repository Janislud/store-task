@extends('layouts.layout')

@section('title', 'Products')

@section('content')
    <div class="pr-container">
        <section class="order-description">
            <h1>Products</h1>
            <p class="desc" >Order it for you or your beloved ones </p>
            <span class="pr-search">
                <form action="{{ route('products.index') }}" method="GET">
                    <input class="pr-searchbar" type="text" name="search" placeholder="Search" value="{{ request('search') }}">
                    <button class="search-btn" type="submit" value="search">&nbsp;</button>
                </form>
            </span>
        </section>

        <section class="conteiner">
            <div class="products-wrapper-conteiner">
                @forelse ($products as $product)
                    <div class="listing-section">
                        <a class="product-card-link" href="/products/{{ $product->id }}">
                            <img class="product-img" src="{{ $product->photos[0]->image_url }}" alt="{{ $product->title }}" width="275">
                            <div class="product-desc">
                                <h2 class="item">{{ $product->name }}</h2>
                                <h3 class="price">{{ number_format($product->price, 2) }}$</h3>
                            </div>
                        </a>
                    </div>
                @empty
                    <p>No products found.</p>
                @endforelse
            </div>
        </section>
    </div>
@endsection
