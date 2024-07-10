<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Produt details page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/pdp.css">
        <!-- Styles -->
        <style>
            * {
                padding: 10px;
                margin: 25px;
            }
            h1 {
                font-family: Poppins, Inter;
                font-size: 26;
                font-weight: 500;
            }

            .price {
                color: #CCA43B;
                font-family: Poppins, Inter;
                font-size: 26;
                font-weight: 600;
            }
            .row {
                display: flex;
            }           
            .headline {
                font-family: Poppins, Inter;
                font-size: 26;
                font-weight: 500;
                text-align: center;
            }  
            .shipping {
                color: #CCA43B;
                font-family: Roboto, Inter;
                font-size: 20;
                font-weight: 700;
                text-align: center;
            }  

            .column {
                width: auto;
            }
            .subsrc-radio {
                font-family: Inter;
                font-size: 14;
                font-weight: 400;
                text-align: left;
            }
            .description {
                font-family: Inter;
                font-size: 14;
                font-weight: 400;
                text-align: left;
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="product-div-right">
        <img></img>
        <div class="headline">Selected with care for best customer experience</div>
        <div class="shipping">🚚 FREE SHIPPING</div>
    </div>
    <div class="product-div-left"></div>
        <h1>Product name</h1>
        <div class="details-div-right">
        <p class="price">$ 9.99</p>
    </div>
    <div class="quantity">
        <div class="item-quantity">
            <div class="item-quantityToggle">
            <button type="button" id="item-plus">+</button>
            <p>1</p>
            <button type="button" disabled="true" id="item-minus">-</button>
        </div>
            </div></div>
        <div class="details-div-left">
        <input type="radio"></input>
        <label>One time purchaise
        </label>
        <div class="subsrc-radio">
        <input type="radio"></input>
        <label>Subscribe and delivery every 
            <select>
            <option value="4-weeks">4 weeks</option>
            <option value="8-weeks">8 weeks</option>
            <option value="16-weeks">16 weeks</option>
            </select>
            Subscribe now and get the 10% of discount on every recurring order.  The discount will be applied at checkout. See details
        </label>
        </div>

        <button class="cart-btn">Add to cart</button>
    </div>
    <p class="descritpion">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat.</p>
    </div>
    </div> 
    </body>
</html>
