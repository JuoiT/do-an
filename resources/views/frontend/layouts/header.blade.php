<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Organic Foodstore</title>
    <!-- Library -->
    <link rel="stylesheet" href="{{ url('assets-frontend') }}/css/library/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ url('assets-frontend') }}/css/library/fontello.css" />
    <link rel="stylesheet" href="{{ url('assets-frontend') }}/css/library/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ url('assets-frontend') }}/css/library/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ url('assets-frontend') }}/css/library/animate.css">
    <!-- End library -->
    <!-- Layout -->
    <link rel="stylesheet" href="{{ url('assets-frontend') }}/css/page/layout.css" />
    <!-- End layout -->
    <!-- Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900">
    <!-- End font -->
</head>

<body>
    <header>
        <div class="top-header">
            <div class="lpart">
                <div class="social">
                    <ul class="social-widget">
                        <li>
                            <a href="#">
                                <i class="icon-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tel-and-email">
                    <p class="tel">Phone:
                        <a href="#">0123 456 789</a>
                    </p>
                    <p class="mail">Email:
                        <a href="#">kemkiuu@gmail.com</a>
                    </p>
                </div>
            </div>
            <div class="rpart">
                <div class="country">
                    <div id="country" class="select">
                        <img src="{{ url('assets-frontend') }}/images/america-flag-icon.png" />America
                    </div>
                    <div id="country-drop" class="dropdown" style="display:none">
                        <ul>
                            <li>
                                <img src="{{ url('assets-frontend') }}/images/vietnam-flag-icon.png" />Vietnam
                            </li>
                            <li>
                                <img src="{{ url('assets-frontend') }}/images/america-flag-icon.png" />America
                            </li>
                            <li>
                                <img src="{{ url('assets-frontend') }}/images/china-flag-icon.png" />China
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="currency">
                    <div class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                        <i class="icon-dollar-symbol"></i>usd
                        <i class="icon-angle-down"></i>
                    </div>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">usd</a>
                        </li>
                        <li>
                            <a href="#">vnd</a>
                        </li>
                        <li>
                            <a href="#">bru</a>
                        </li>
                    </ul>
                </div>
                <div class="account">
                    <div class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                        <i class="icon-avatar"></i>My Account
                        <i class="icon-angle-down"></i>
                    </div>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('my_account') }}">My Account</a>
                        </li>
                        <li>
                            <a href="{{ route('whishlist') }}">Wishlist</a>
                        </li>
                        <li>
                            <a href="{{ route('checkout') }}">checkout</a>
                        </li>
                        <li>
                            <a href="{{ route('cart') }}">cart</a>
                        </li>
                        @if (Auth::check())
                            <li>
                                <a href="{{ route('logout') }}">Logout</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('register') }}">register</a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}">login</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
