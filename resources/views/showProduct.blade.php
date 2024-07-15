@extends('layouts.layout')

@section('title', 'Product page')

@section('content')
        <div class="main-wrapper">
            <div class="container">
                <div class="product-div row">
                    <div class="product-div-left column">
                            @foreach($product->photos as $photo)
                            <img class="product-img" src="{{ $photo->image_url }}" alt="{{ $photo->title }}"></img>
                            @endforeach
                        <div class="headline">Selected with care for best customer experience</div>
                        <div class="shipping">🚚 FREE SHIPPING</div>
                    </div>
                    <div class="product-div-right column">
                        <h1>{{ $product->name }}</h1>
                        <p class="pr-price">${{ $product->price }}</p>

                        {{-- SALABOT +/- ielikt grozā --}}
                        <p class="quantity">Quantity</p>


                        
                        @include('Components.amountToggler', ['productId' => "HARDCODED_ID", "item" => ["quantity" => 1]])


                        <div>
                            <form action="{{ route('cart.add', ['id' => $product->id]) }}" method="POST" id="cart-form">
                                @csrf
                                <input type="hidden" name="quantity" value="1" min="1">
                                <button class="yellow-box" type="submit">Add to Cart</button>
                            </form>
                        </div>

                        
                        <form class="subscr-form">
                            <div class="enhanced-radio">
                                <input type="radio" class="radio" name="subscription" id="choice1" value="onetime" checked></input>
                                <span class="radio-look"></span>
                            <label class="form-control">One time purchaise</label>
                            </div>
                            <div class="subsrc-radio">
                                <div class="enhanced-radio">
                                    <input type="radio" class="radio" name="subscription" id="choice2" value="repeated" ></input>
                                    <span class="radio-look"></span>
                                    <label class="form-control">Subscribe and get new product delivered every </label>
                                </div>
                                <select>
                                        <option value="4-weeks">4 weeks</option>
                                        <option value="8-weeks">8 weeks</option>
                                        <option value="16-weeks">16 weeks</option>
                                </select>
                            </div>
                        </form>
                        <p class="subscr-details">Subscribe now and get the 10% of discount on every recurring order.  The discount will be applied at checkout.</p>
                        <p class="description">{{ $product->description }}</p>
                    </div>
                </div>
            </div> 
        </div>
@endsection


@section('scripts')
    <script src="{{ asset('js/cart.js') }}"></script>
@endsection
