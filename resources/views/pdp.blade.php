<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Produt details page</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="./css/pdp.css">

    </head>
    <body>
        <div class="main-wrapper">
        <div class="container">
        <div class="product-div row">
    <div class="product-div-right column">
        <img src="https://ecommerce-nine-bay.vercel.app/static/media/product1.fab5cc0599d70de19607.png" alt=""></img>
        <div class="headline">Selected with care for best customer experience</div>
        <div class="shipping">🚚 FREE SHIPPING</div>
    </div>
    <div class="product-div row">
    <div class="product-div-left column">
        <h1>Product name</h1>
        <div class="details-div-right column">
        <p class="price">$ 9.99</p>
        <p class="quantity">Quantity</p>
        <div class="item-quantity-toggle">
            <button type="button" class="item-plus">+</button>
            <p>1</p>
            <button type="button" disabled="true" class="item-minus">-</button>
        </div>
        </div>
        <div class="details-div-left column">
            <form>
        <input type="radio" name="subscription" id="choice1"></input>
        <label>One time purchaise
        </label>
        <div class="subsrc-radio">
        <input type="radio" name="subscription" id="choice2" ></input>
        <label>Subscribe and delivery every 
            <select>
            <option value="4-weeks">4 weeks</option>
            <option value="8-weeks">8 weeks</option>
            <option value="16-weeks">16 weeks</option>
            </select>
            <p class="subscr-details">Subscribe now and get the 10% of discount on every recurring order.  The discount will be applied at checkout. <p class="see-subscr-details">See details</p></p>
        </label>
        </form>
        </div>
        <button class="cart-btn">🛒 + Add to cart</button>
    <p class="description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat.</p>

    </div>
    </div>
    </div>
    </div>
    </div> 
    </div>
    </div>
    </body>
</html>
