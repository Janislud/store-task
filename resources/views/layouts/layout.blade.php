<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pdp.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/deals.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    @include('Components.navigation')

    <div class="content">
        @yield('content')
    </div>

    @include('Components.footer')
    <script src="{{ asset('js/navbar.js') }}"></script>

    {{-- Swiper.js cdn, for pdp slider --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    {{-- Swiper.js initializing --}}
    <script src="{{ asset('js/slider.js') }}"></script>


    @yield('scripts')
</body>

</html>
