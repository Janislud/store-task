@extends('layouts.layout')

@section('title', 'Products')

@section('content')
    <div class="pr-container">
        <section class="order-description">
            <h1>Products</h1>
            <h2>Order it for you or your beloved ones </h2>
            <span class="pr-search">
                <form action="{{ route('products.index') }}" method="GET">
                    <input class="pr-searchbar" type="text" name="search" placeholder="Search" value="{{ request('search') }}">
                    <button type="submit" value="search">&nbsp;</button>
                </form>
            </span>
        </section>

        <section class="conteiner">
            <div class="products-wrapper-conteiner">
                @forelse ($products as $product)
                    <div class="listing-section">
                        <a class="product-card-link" href="/products/{{ $product->id }}">
                            <img class="images" style="background-image: url('{{ asset($product->image) }}');">
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
