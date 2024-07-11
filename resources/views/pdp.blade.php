@extends('layouts.layout')

@section('title', 'pdp')

@section('content')
        <div class="main-wrapper">
            <div class="container">
                <div class="product-div row">
                    <div class="product-div-left column">
                        <img class="product-img" src="https://ecommerce-nine-bay.vercel.app/static/media/product1.fab5cc0599d70de19607.png" alt="Product Image"></img>
                        <div class="headline">Selected with care for best customer experience</div>
                        <div class="shipping">🚚 FREE SHIPPING</div>
                    </div>
                    <div class="product-div-right column">
                        <h1>Product name</h1>
                        <p class="price">$ 9.99</p>
                        <p class="quantity">Quantity</p>
                        <div class="item-quantity-toggle">
                            <button type="button" class="item-plus">+</button>
                            <p class="item-count">1</p>
                            <button type="button" disabled="true" class="item-minus">-</button>
                        </div>
                        <form class="subscr-form">
                            <input type="radio" name="subscription" id="choice1" value="onetime" checked></input>
                            <label class="form-control">One time purchaise</label>
                            <div class="subsrc-radio">
                                <input type="radio" name="subscription" id="choice2" value="repeated" ></input>
                                <label class="form-control">Subscribe and delivery every 
                                    <select>
                                        <option value="4-weeks">4 weeks</option>
                                        <option value="8-weeks">8 weeks</option>
                                        <option value="16-weeks">16 weeks</option>
                                    </select>
                                </label>
                            </div>
                        </form>
                        <p class="subscr-details">Subscribe now and get the 10% of discount on every recurring order.  The discount will be applied at checkout. <p class="see-subscr-details">See details</p></p>
                        <button class="product-cart-btn">🛒 + Add to cart</button>
                        <p class="description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat.</p>
                    </div>
                </div>
            </div> 
        </div>
@endsection
