<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./css/products.css">
        <title>Produt details page</title>
    </head>
    <body>
    @include('Components.navigation')
        <div class="main-wrapper">
            <div class="container"></div>
        </div>
    @include('Components.footer')
    </body>
</html>