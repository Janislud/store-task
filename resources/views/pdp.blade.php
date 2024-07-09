<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Produt details page</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

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
            }  
            .shipping {
                color: #CCA43B;
                font-family: Roboto, Inter;
                font-size: 20;
                font-weight: 700;
            }  

            .column {
                flex: 50%;
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="row">
    <div class="column">
        <img></img>
        <div class="headline">Selected with care for best customer experience</div>
        <div class="shipping">🚚 FREE SHIPPING</div>
    </div>
    <div class="column"></div>
        <h1>Product name</h1>
        <p class="price">$ 9.99</p>
    </div> 
    </body>
</html>
