<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="../css/index.css"> --}}
        <link rel="stylesheet" href="{{secure_asset("/css/index.css")}}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="content">
        @yield('content')
    </div>

    {{-- Data is not past manually --}}
    {{-- @include('Components.checkoutSideBar', ['cart' => session()->get('cart', [])]) --}}

    <script src="https://{{request()->getHost()}}/js/validation.js"></script>

    @yield('scripts')
</body>
</html>
