<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <title>Navbar</title>
</head>
<body>
    <header>
        <nav>
            <a href="/" class="logo">
                <img src="./assets/Main-logo.svg" alt="main-logo">
            </a>
            <ul class="nav-links">
                <li><a href="/">Products</a></li>
                <li><a href="/clothes">Clothes</a></li>
                <li><a href="/tech">Tech</a></li>
            </ul>
            <div class="icons">
                <button>
                    <a href="/profile">
                        <img src="./assets/Profile.svg" alt="profile-icon">
                    </a>
                </button>
                <button>
                    <a href="/cart">
                        <img src="./assets/Cart.svg" alt="cart-icon">
                    </a>
                </button>
            </div>

            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>

        </nav>
    </header>
    <script src="./js/navbar.js"></script>
</body>
</html>
