<div class="bottom-header">
    <div class="container">
        <div class="vishlist">
            @if(Auth::user())
            <div class="vishlist-inner">
                <a href="{{ route('whishlist') }}">
                    <i class="icon-heart-empty"></i>
                </a>
                @if (countFavorited() > 0)
                    <div class="vishlist-counter">{{ countFavorited() }}</div>
                @endif
            </div>
            @else
            <div style="width: 52px;"></div>
            @endif
        </div>
        <nav class="navbar">
            <div class="nav-header">
                <button type="button" class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ url('assets-frontend') }}/images/logo.png" />
                    </a>
                </div>
            </div>
            <div class="collapse" id="organic-food-navigation">
                <div class="remove">
                    <i class="icon-cancel"></i>
                </div>
                <div class="menu-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ url('assets-frontend') }}/images/logo.png" />
                    </a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="{{ url()->current() == route('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="{{ url()->current() == route('product') ? 'active' : '' }}">
                        <a href="{{ route('product') }}">Shop</a>
                    </li>
                    <li class="{{ url()->current() == route('blog') ? 'active' : '' }}">
                        <a href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="{{ url()->current() == route('contact') ? 'active' : '' }}">
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="search-and-cart">
            <div class="search">
                <div class="search-inner">
                    <a href="#">
                        <i class="icon-search"></i>
                    </a>
                </div>
            </div>
            <div class="cart">
                <div class="cart-inner">
                    <a href="#">
                        <i class="icon-shopping-basket"></i>
                    </a>
                    @if (session()->has('cart.items'))
                        <div class="cart-counter">{{ session('cart.totalQuantity') }}</div>
                    @endif
                </div>
                <div class="cart-popup">
                    <p class="item-in-cart">
                        {{ session()->has('cart.totalQuantity') ? session('cart.totalQuantity') : '0' }} item(s) in
                        your
                        cart</p>
                    <div class="item-list">
                        @if (session()->has('cart.items'))
                            @foreach (session('cart.items') as $item)
                                <div class="box cart-item-{{ $item['product_id'] }}">
                                    <div class="img-part">
                                        <img class="img-responsive" style="width: 100px"
                                            src="{{ url('upload-images') }}/{{ $item['image'] }}">
                                    </div>
                                    <div class="text-part">
                                        <a class="product-name"
                                            href="{{ route('detail', $item['product_id']) }}">{{ $item['name'] }}</a>
                                        <div class="quantity-and-price"><span>{{ $item['quantity'] }} x
                                                {{ toUsd($item['price']) }}</span></div>
                                    </div>
                                    <a href="{{ route('cart.remove-item', $item['product_id']) }}"
                                        class="clear-btn" title="Remove this">
                                        <i class="icon-cancel"></i>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="cart-total">
                        <span>Total: </span>
                        @if (session()->has('cart.totalPrice'))
                            <span>{{ toUsd(session('cart.totalPrice')) }}</span>
                        @else
                            <span>{{ toUsd(0) }}</span>
                        @endif
                    </div>
                    <div class="cart-btm">
                        <div class="btn-group">
                            <a href="{{ route('cart') }}" class="btn cart-view">View Cart</a>
                            <a href="{{ route('checkout') }}" class="btn checkout">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="searchbox">
            <div class="inner">
                <div class="container-1">
                    <div class="pos-rel">
                        <input class="input-serch" type="text" name="search" placeholder="Search" />
                        <div class="cross">
                            <i class="icon-search"></i>
                        </div>
                        <div class="cross">
                            <i class="icon-cancel"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
<div class="clearfix"></div>
