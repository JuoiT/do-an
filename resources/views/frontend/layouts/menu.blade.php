<div class="bottom-header">
    <div class="container">
        <div class="vishlist">
            <div class="vishlist-inner">
                <a href="{{route('whishlist')}}"><i class="icon-heart"></i></a>
                <div class="vishlist-counter">01</div>
            </div>
        </div>
        <nav class="navbar">
            <div class="nav-header">
                <button type="button" class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
                    <a href="{{route('home')}}"><img src="{{url('assets-frontend')}}/images/logo.png" /></a>
                </div>
            </div>
            <div class="collapse" id="organic-food-navigation">
                <div class="remove"><i class="icon-cancel-music"></i></div>
                <div class="menu-logo">
                    <a href="{{route('home')}}"><img src="{{url('assets-frontend')}}/images/logo.png" /></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="{{(Request::url() === 'http://127.0.0.1:8000/organic/home') ? 'active' : ''}}">
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li class="">
                        <a href="#">History</a>
                    </li>
                    <li class="{{(Request::url() === 'http://127.0.0.1:8000/organic/product') ? 'active' : ''}}">
                        <a href="{{route('product')}}">Shop</a>
                    </li>
                    <li class="">
                        <a href="#">Fruits</a>
                    </li>
                    <li class="">
                        <a href="#">Organic Fruits</a>
                    </li>
                    <li class="">
                        <a href="#">Sprouts</a>
                    </li>
                    <li class="">
                        <a href="#">Custom</a>
                    </li>
                    <li class="{{(Request::url() === 'http://127.0.0.1:8000/organic/blog') ? 'active' : ''}}">
                        <a href="{{route('blog')}}">Blog</a>
                    </li>
                    <li class="">
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="search-and-cart">
            <div class="search">
                <div class="search-inner"><a href="#"><i class="icon-magnifying-glass"></i></a></div>
            </div>
            <div class="cart">
                <div class="cart-inner">
                    <a href="#"><i class="icon-shopping-bag"></i></a>
                    <div class="cart-counter">01</div>
                </div>
                <div class="cart-popup">
                    <p class="item-in-cart">2 items in your cart</p>
                    <div class="item-list">
                        <div class="box">
                            <div class="img-part">
                                <img class="img-responsive"
                                    src="{{url('assets-frontend')}}/images/cart-popup-img-1.jpg">
                            </div>
                            <div class="text-part">
                                <a class="product-name">Strawberries, 16 oz</a>
                                <div class="quantity-and-price">1 x $2.50</div>
                            </div>
                            <a href="#" class="clear-btn"><i class="icon-cancel-music"></i></a>
                        </div>
                        <div class="box">
                            <div class="img-part">
                                <img class="img-responsive"
                                    src="{{url('assets-frontend')}}/images/cart-popup-img-2.jpg">
                            </div>
                            <div class="text-part">
                                <a class="product-name">Broccoli, bunch</a>
                                <div class="quantity-and-price">2 x $4.00</div>
                            </div>
                            <a href="#" class="clear-btn"><i class="icon-cancel-music"></i></a>
                        </div>
                    </div>
                    <div class="cart-total">
                        <span>Total: $6.50</span>
                    </div>
                    <div class="cart-btm">
                        <div class="btn-group">
                            <a href="{{route('cart')}}" class="btn cart-view">view cart</a>
                            <a href="{{route('checkout')}}" class="btn checkout">checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="searchbox">
            <div class="inner">
                <div class="container-1">
                    <div class="pos-rel">
                        <input class="input-serch" type="text" name="" placeholder="Search our store" />
                        <div class="cross"><i class="icon-search"></i></div>
                        <div class="cross"><i class="icon-cancel-music"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
<div class="clearfix"></div>
