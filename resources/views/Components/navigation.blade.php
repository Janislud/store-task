<header>
    <nav>
        <a href="/" class="logo">
            <img src="{{ asset('assets/Main-logo-footer.png') }}" alt="main-logo">
        </a>
        <ul class="nav-links">
            <li><a href="/" class="nav-item {{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="/products" class="nav-item {{ request()->is('products') ? 'active' : '' }}">Products</a></li>
            <li><a href="/about" class="nav-item {{ request()->is('about') ? 'active' : '' }}">About</a></li>
        </ul>
        <div class="icons">
            <button class="btn">
                <a href="/profile">
                    <img src="{{ request()->is('profile') ? asset('assets/Profile-gold.svg') : asset('assets/Profile.svg') }}" alt="profile-icon" class="">
                </a>
            </button>
            <button class="btn">
                <a href="/cart" >
                    <img src="{{ asset(request()->is('cart') ? 'assets/Cart-gold.svg' : 'assets/Cart.svg') }}" alt="cart-icon">
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