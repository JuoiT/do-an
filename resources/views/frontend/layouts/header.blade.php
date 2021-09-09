<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oganic</title>
    <!-- Link của Owl_Carousel-->
    <link rel="stylesheet" href="{{url('assets-frontend')}}/css/layout.css">
    <link rel="stylesheet" href="{{url('assets-frontend')}}/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('assets-frontend')}}/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="shortcut icon" type="image/png" href="{{url('assets-frontend')}}/images/icon_title.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets-frontend')}}/fontawesome-pro-5.12.0-web/css/all.css">
</head>

<body>
    <header>
        <div id="social">
            <ul class="icon-widget">
                <li>
                    <a href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div id="contact">
            <p class="tel">
                <span class="color-text">Phone:</span>(+91)123456789
            </p>
            <p class="email">
                <span class="color-text">Email:</span>kemkiuu@gmail.com
            </p>
        </div>
        <div class="select">
            <div id="language" class="language">
                <div>
                    <img src="{{url('assets-frontend')}}/images/flag-france.png" alt="">
                    <span>FRENCH</span>
                    <i class="fal fa-angle-down icon-down"></i>
                    <span class="currency">
                        <ul class="select-lg">
                            <li>
                                <img src="{{url('assets-frontend')}}/images/flag-france.png" alt="">
                                <span>FRENCH</span>
                            </li>
                            <li>
                                <img src="{{url('assets-frontend')}}/images/flag-vn.png" alt="">
                                <span>VIET NAM</span>
                            </li>
                        </ul>
                </div>
            </div>
            <div class="drop-down">
                <div>
                    <span>$ USD</span>
                    <i class="fal fa-angle-down icon-down"></i>
                    <ul class="money">
                        <li>
                            <span>USD</span>
                        </li>
                        <li>
                            <span>LTD</span>
                        </li>
                        <li>
                            <span>VND</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="account">
                <p>
                    <i class="fal fa-user icon-user"></i>
                    <span>My Account</span>
                    <i class="fal fa-angle-down icon-down"></i>
                </p>
                <ul class="list-account">
                    <li>
                        <a href="{{route('my_account')}}">My account</a>
                    </li>
                    <li>
                        <a href="{{route('whishlist')}}">Whishlist</a>
                    </li>
                    <li>
                        <a href="{{route('checkout')}}">Checkout</a>
                    </li>
                    <li>
                        <a href="">Blog</a>
                    </li>
                    <li>
                        <a href="">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <nav>
        <div class="nav-pc">
            <div class="logo">
                <div class="img-logo">
                    <img src="{{url('assets-frontend')}}/images/logo_nav.png" alt="">
                </div>
                <div class="icon-nav">
                    <div class="item-left">
                        <div class="item item-1">
                            <a href="{{url('assets-frontend')}}/html/whishlist.html">
                                <i class="fal fa-heart icon-item__small"></i>
                                <span class="amount">01</span>
                            </a>
                        </div>
                    </div>
                    <div class="item-right">
                        <div class="item item-2">
                            <a href="{{route('cart')}}">
                                <i class="fal fa-search icon-item__small"></i>
                            </a>
                        </div>
                        <div class="item item-3">
                            <a href="{{url('assets-frontend')}}/html/shopping_cart.html">
                                <i class="fal fa-shopping-bag icon-item__small"></i>
                                <span class="amount">01</span>
                            </a>
                        </div>
                    </div>

                    <div class="nav-mobile">
                        <span>
                            <i class="far fa-bars icon-item__small"></i>
                        </span>
                    </div>

                </div>
            </div>
