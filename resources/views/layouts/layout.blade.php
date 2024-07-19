<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="./css/index.css"> --}}
    <link rel="stylesheet" href="../css/index.css">
    <title>@yield('title')</title>
</head>

<body>
    @include('Components.navigation')

    <main class="content">
        @yield('content')
    </main>

    <script src="https://{{request()->getHost()}}/js/swiper.js"></script>
    <script src="https://{{request()->getHost()}}/js/amountToggler.js"></script>
    {{-- <script src="https://0fc8-159-148-207-225.ngrok-free.app/js/amountToggler.js"></script> --}}

    <script src="https://{{request()->getHost()}}/js/navbar.js"></script>
    <script src="https://{{request()->getHost()}}/js/testimonials.js"></script>
    <script src="https://{{request()->getHost()}}/js/deals.js"></script>
    <script src="https://{{request()->getHost()}}/js/slider.js"></script>
    <script src="https://{{request()->getHost()}}/js/faq.js"></script>
   

    @include('Components.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    @yield('scripts')
</body>

</html>
