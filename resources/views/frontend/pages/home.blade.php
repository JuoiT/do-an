@extends('frontend.master')

@section('main')

<link href="{{url('assets-frontend')}}/css/page/home.css" rel="stylesheet"/>
<link href="{{url('assets-frontend')}}/css/library/responsive-slider.css" rel="stylesheet" />

<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
    <div class="slides" data-group="slides">
        <ul>
            <li>
                <div class="slide-body" data-group="slide">
                    <img src="{{url('assets-frontend')}}/images/slider-banner.jpg">
                    <div class="carouseal-caption">
                        <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500"
                            data-length="300">
                            <div class="sub-tit">Natural Health Care Ingredientsa</div>
                            <h2><span>100%</span> Organic</h2>
                            <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800"
                                data-length="300">Are they safer? More nutritious? </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="slide-body" data-group="slide">
                    <img src="{{url('assets-frontend')}}/images/slider-banner.jpg">
                    <div class="carouseal-caption">
                        <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500"
                            data-length="300">
                            <div class="sub-tit">Natural Health Care Ingredientsa</div>
                            <h2><span>100%</span> Organic</h2>
                            <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800"
                                data-length="300">Are they safer? More nutritious? </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>

<section class="fress-entry-section">
    <div class="pos-absolute">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12 wow bounce">
                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/fresh-fruits-img.jpg" />
                    <div class="tit-btn-wrapper">
                        <div class="tit"><span>fresh</span> fruits</div>
                        <a class="btn">View Collections</a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 wow bounce">
                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/fresh-vegetables-img.jpg" />
                    <div class="tit-btn-wrapper">
                        <div class="tit"><span>fresh</span> Vegetables</div>
                        <a class="btn">View Collections</a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 wow bounce">
                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/organic-foods-img.jpg" />
                    <div class="tit-btn-wrapper">
                        <div class="tit"><span>Organic</span> Foods</div>
                        <a class="btn">View Collections</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>
<div class="clearfix"></div>

<section class="new-arrivals-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12  wow fadeInUp">
                <div class="section-tit">
                    <div class="inner">
                        <h2><span>New</span>arrivals</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="1.2s">
                <div class="owl-carousel owl-theme new-arrivals-slider">
                    <div class="item">
                        <div class="wrapper">
                            <div class="pro-img">
                                <img class="img-responsive"
                                    src="{{url('assets-frontend')}}/images/new-arrivals-img-1.jpg" />
                            </div>
                            <div class="contain-wrapper">
                                <div class="tit">Jessica Simpson Fruit's</div>
                                <div class="price">
                                    <div class="new-price">$33.00</div>
                                    <div class="old-price"><del>$33.00</del></div>
                                </div>
                                <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                    <i class="icon-basket-supermarket"></i>
                                </div>
                            </div>
                            <div class="wrapper-box-hover">
                                <div class="text">
                                    <ul>
                                        <li><a href="whishlist.html"><i class="icon-heart"></i></a></li>
                                        <li><a href="product-detail.html"><i class="icon-view"></i></a></li>
                                        <li><a href="cart.html"><i class="icon-basket-supermarket"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrapper">
                            <div class="pro-img">
                                <img class="img-responsive"
                                    src="{{url('assets-frontend')}}/images/new-arrivals-img-2.jpg" />
                            </div>
                            <div class="contain-wrapper">
                                <div class="tit">Jessica Simpson Fruit's</div>
                                <div class="price">
                                    <div class="new-price">$33.00</div>
                                    <div class="old-price"><del>$33.00</del></div>
                                </div>
                                <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                    <i class="icon-basket-supermarket"></i>
                                </div>
                            </div>
                            <div class="wrapper-box-hover">
                                <div class="text">
                                    <ul>
                                        <li><a href="whishlist.html"><i class="icon-heart"></i></a></li>
                                        <li><a href="product-detail.html"><i class="icon-view"></i></a></li>
                                        <li><a href="cart.html"><i class="icon-basket-supermarket"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sale">sale</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrapper">
                            <div class="pro-img">
                                <img class="img-responsive"
                                    src="{{url('assets-frontend')}}/images/new-arrivals-img-3.jpg" />
                            </div>
                            <div class="contain-wrapper">
                                <div class="tit">Lee Uniforms Vegetable's Short-Sleeve</div>
                                <div class="price">
                                    <div class="new-price">$33.00</div>
                                    <div class="old-price"><del>$33.00</del></div>
                                </div>
                                <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                    <i class="icon-basket-supermarket"></i>
                                </div>
                            </div>
                            <div class="wrapper-box-hover">
                                <div class="text">
                                    <ul>
                                        <li><a href="whishlist.html"><i class="icon-heart"></i></a></li>
                                        <li><a href="product-detail.html"><i class="icon-view"></i></a></li>
                                        <li><a href="cart.html"><i class="icon-basket-supermarket"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrapper">
                            <div class="pro-img">
                                <img class="img-responsive"
                                    src="{{url('assets-frontend')}}/images/new-arrivals-img-4.jpg" />
                            </div>
                            <div class="contain-wrapper">
                                <div class="tit">Lee Uniforms Vegetable's Short-Sleeve</div>
                                <div class="price">
                                    <div class="new-price">$33.00</div>
                                    <div class="old-price"><del>$33.00</del></div>
                                </div>
                                <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                    <i class="icon-basket-supermarket"></i>
                                </div>
                            </div>
                            <div class="wrapper-box-hover">
                                <div class="text">
                                    <ul>
                                        <li><a href="whishlist.html"><i class="icon-heart"></i></a></li>
                                        <li><a href="product-detail.html"><i class="icon-view"></i></a></li>
                                        <li><a href="cart.html"><i class="icon-basket-supermarket"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="new">new</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrapper">
                            <div class="pro-img">
                                <img class="img-responsive"
                                    src="{{url('assets-frontend')}}/images/new-arrivals-img-1.jpg" />
                            </div>
                            <div class="contain-wrapper">
                                <div class="tit">Jessica Simpson Fruit's</div>
                                <div class="price">
                                    <div class="new-price">$33.00</div>
                                    <div class="old-price"><del>$33.00</del></div>
                                </div>
                                <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                    <i class="icon-basket-supermarket"></i>
                                </div>
                            </div>
                            <div class="wrapper-box-hover">
                                <div class="text">
                                    <ul>
                                        <li><a href="whishlist.html"><i class="icon-heart"></i></a></li>
                                        <li><a href="product-detail.html"><i class="icon-view"></i></a></li>
                                        <li><a href="cart.html"><i class="icon-basket-supermarket"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrapper">
                            <div class="pro-img">
                                <img class="img-responsive"
                                    src="{{url('assets-frontend')}}/images/new-arrivals-img-1.jpg" />
                            </div>
                            <div class="contain-wrapper">
                                <div class="tit">Jessica Simpson Fruit's</div>
                                <div class="price">
                                    <div class="new-price">$33.00</div>
                                    <div class="old-price"><del>$33.00</del></div>
                                </div>
                                <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                    <i class="icon-basket-supermarket"></i>
                                </div>
                            </div>
                            <div class="wrapper-box-hover">
                                <div class="text">
                                    <ul>
                                        <li><a href="whishlist.html"><i class="icon-heart"></i></a></li>
                                        <li><a href="product-detail.html"><i class="icon-view"></i></a></li>
                                        <li><a href="cart.html"><i class="icon-basket-supermarket"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>

<section class="deal-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="section-tit">
                    <div class="inner">
                        <h2><span>deal of</span> the day</h2>
                    </div>
                </div>
                <div class="filter-part">
                    <div class="col-lg-4 col-md-5 col-sm-8 col-xs-12 center-part">
                        <div class="slider-bg wow slideInDown">
                            <img class="img-responsive bg" src="{{url('assets-frontend')}}/images/slider-bg-1.png" />
                            <div class="pos-abs">
                                <div class="owl-carousel owl-theme deal-slider">
                                    <div class="item">
                                        <div class="pro-img">
                                            <img class="img-responsive"
                                                src="{{url('assets-frontend')}}/images/deal-img-7.png" />
                                        </div>
                                        <div class="contain-wrapper">
                                            <div class="tit">Kensie Fruit's Wool Cocoon CoatKensie Fruit</div>
                                            <div class="price">
                                                <div class="new-price">$23.00</div>
                                                <div class="old-price"><del>$12.00</del></div>
                                            </div>
                                            <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                                <i class="icon-basket-supermarket"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pro-img">
                                            <img class="img-responsive"
                                                src="{{url('assets-frontend')}}/images/deal-img-7.png" />
                                        </div>
                                        <div class="contain-wrapper">
                                            <div class="tit">Kensie Fruit's Wool Cocoon CoatKensie Fruit</div>
                                            <div class="price">
                                                <div class="new-price">$23.00</div>
                                                <div class="old-price"><del>$12.00</del></div>
                                            </div>
                                            <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                                <i class="icon-basket-supermarket"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pro-img">
                                            <img class="img-responsive"
                                                src="{{url('assets-frontend')}}/images/deal-img-7.png" />
                                        </div>
                                        <div class="contain-wrapper">
                                            <div class="tit">Kensie Fruit's Wool Cocoon CoatKensie Fruit</div>
                                            <div class="price">
                                                <div class="new-price">$23.00</div>
                                                <div class="old-price"><del>$12.00</del></div>
                                            </div>
                                            <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                                <i class="icon-basket-supermarket"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <div id="myBtnContainer" class="wow fadeInLeft">
                            <button class="btn active" onclick="filterSelection('all')">all</button>/
                            <button class="btn" onclick="filterSelection('fruit')"> fruit</button>/
                            <button class="btn" onclick="filterSelection('meet')"> meet</button>/
                            <button class="btn" onclick="filterSelection('vegatable')"> vegetable</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6  col-xs-12 pull-left wow fadeInLeft">
                        <div class="filterDiv fruit">
                            <div class="img-part">
                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/deal-img-1.jpg" />
                            </div>
                            <div class="text-part">
                                <div class="box-tit">Jessica Simpson Fruit's</div>
                                <div class="ratting">
                                    <ul>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/dark-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/dark-star-2.png"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <div class="new-price">$33.00</div>
                                    <div class="old-price"><del>$33.00</del></div>
                                </div>
                                <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                    <i class="icon-basket-supermarket"></i>
                                </div>
                            </div>
                        </div>
                        <div class="filterDiv meet ">
                            <div class="img-part">
                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/deal-img-2.jpg" />
                            </div>
                            <div class="text-part">
                                <div class="box-tit">Jessica Simpson Fruit's</div>
                                <div class="ratting">
                                    <ul>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/dark-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/dark-star-2.png"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <div class="new-price">$33.00</div>
                                    <div class="old-price"><del>$33.00</del></div>
                                </div>
                                <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                    <i class="icon-basket-supermarket"></i>
                                </div>
                            </div>
                        </div>
                        <div class="filterDiv vegatable ">
                            <div class="img-part">
                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/deal-img-3.jpg" />
                            </div>
                            <div class="text-part">
                                <div class="box-tit">Jessica Simpson Fruit's</div>
                                <div class="ratting">
                                    <ul>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/dark-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/dark-star-2.png"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <div class="new-price">$33.00</div>
                                    <div class="old-price"><del>$33.00</del></div>
                                </div>
                                <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                    <i class="icon-basket-supermarket"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pull-right  wow fadeInRight">
                        <div class="filterDiv fruit ">
                            <div class="img-part">
                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/deal-img-4.jpg" />
                            </div>
                            <div class="text-part">
                                <div class="box-tit">Jessica Simpson Fruit's</div>
                                <div class="ratting">
                                    <ul>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/dark-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/dark-star-2.png"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <div class="new-price">$33.00</div>
                                    <div class="old-price"><del>$33.00</del></div>
                                </div>
                                <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                    <i class="icon-basket-supermarket"></i>
                                </div>
                            </div>
                        </div>
                        <div class="filterDiv meet">
                            <div class="img-part">
                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/deal-img-5.jpg" />
                            </div>
                            <div class="text-part">
                                <div class="box-tit">Jessica Simpson Fruit's</div>
                                <div class="ratting">
                                    <ul>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/dark-star-2.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/dark-star-2.png"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <div class="new-price">$33.00</div>
                                    <div class="old-price"><del>$33.00</del></div>
                                </div>
                                <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                    <i class="icon-basket-supermarket"></i>
                                </div>
                            </div>
                        </div>
                        <div class="filterDiv vegatable ">
                            <div class="img-part">
                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/deal-img-6.jpg" />
                            </div>
                            <div class="text-part">
                                <div class="box-tit">Jessica Simpson Fruit's</div>
                                <div class="ratting">
                                    <ul>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/green-star.png"></a>
                                        </li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/dark-star.png"></a></li>
                                        <li><a href="#"><img class="img-responsive"
                                                    src="{{url('assets-frontend')}}/images/dark-star.png"></a></li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <div class="new-price">$33.00</div>
                                    <div class="old-price"><del>$33.00</del></div>
                                </div>
                                <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                    <i class="icon-basket-supermarket"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>

<section class="fress-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 lpart wow slideInLeft">
                <div class="bg equal-height ">
                    <div class="section-name"><span>fresh</span> Fruits</div>
                    <a href="#" class="shop-btn">shop now</a>
                </div>
            </div>
            <div class="col-sm-4  rpart  wow slideInRight">
                <div class="bg equal-height">
                    <div class="free-shipping">freee shipping</div>
                    <p>With order over $500</p>
                    <a href="#" class="shop-btn-1">shop now</a>
                    </span>
                </div>
            </div>
        </div>
</section>
<div class="clearfix"></div>

<section class="organic-news">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="section-tit">
                    <div class="inner">
                        <h2><span>Organic</span> news</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-sm-3 col-xs-12 wow slideInLeft" data-wow-duration="1s" data-wow-delay="1.3s">
                <div class="wrapper">
                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/organic-news-img-1.jpg" />
                    <div class="overlay">
                    </div>
                    <div class="text">
                        <div class="date">March 04, 2018</div>
                        <div class="title"><a href="#">Quick dinners, healthy recipes, and more. </a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12 wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="wrapper">
                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/organic-news-img-2.jpg" />
                    <div class="overlay">
                    </div>
                    <div class="text">
                        <div class="date">March 04, 2018</div>
                        <div class="title"><a href="#">5 Reasons Why Grapes Are Good for You </a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12 wow slideInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="wrapper">
                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/organic-news-img-3.jpg" />
                    <div class="overlay">
                    </div>
                    <div class="text">
                        <div class="date">March 04, 2018</div>
                        <div class="title"><a href="#">Chicken & Spring Vegetable Lasagna Recipe </a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12 wow slideInRight" data-wow-duration="1s" data-wow-delay="1.3s">
                <div class="wrapper">
                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/organic-news-img-4.jpg" />
                    <div class="overlay">
                    </div>
                    <div class="text">
                        <div class="date">March 04, 2018</div>
                        <div class="title"><a href="#">Fusce ac pharetra urna. Duis non lacus sit</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="delivery-process">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 ">
                <div class="section-tit">
                    <div class="inner">
                        <h2><span><span>delivery</span> process</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 first wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="icon-part">
                    <img class="img-responsive center-block" src="{{url('assets-frontend')}}/images/step-1.png" />
                    <i class="icon-carrot"></i>
                </div>
                <div class="process-name">
                    <div class="step">step 01</div>
                    <p>Choose one or more products</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 second wow  fadeIn" data-wow-duration="1s" data-wow-delay="1.3s">
                <div class="icon-part">
                    <img class="img-responsive center-block" src="{{url('assets-frontend')}}/images/step-2.png" />
                    <i class="icon-warehouse"></i>
                </div>
                <div class="process-name">
                    <div class="step">step 02</div>
                    <p>Determine our Farm</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 third wow  fadeIn" data-wow-duration="1s" data-wow-delay="2.3s">
                <div class="icon-part">
                    <img class="img-responsive center-block" src="{{url('assets-frontend')}}/images/step-3.png" />
                    <i class="icon-placeholder-filled-point"></i>
                </div>
                <div class="process-name">
                    <div class="step">step 03</div>
                    <p>Write Your Location</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 fourth wow  fadeIn" data-wow-duration="1s" data-wow-delay="3.3s">
                <div class="icon-part">
                    <img class="img-responsive center-block" src="{{url('assets-frontend')}}/images/step-4.png" />
                    <i class="icon-package"></i>
                </div>
                <div class="process-name">
                    <div class="step">step 04</div>
                    <p>Fast Delivery</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>

<section class="brand wow fadeInUp">
    <div class="container">
        <div class="owl-carousel owl-theme brand-slider">
            <div class="item">
                <img class="img-responsive" src="{{url('assets-frontend')}}/images/brand-1.png" />
            </div>
            <div class="item">
                <img class="img-responsive" src="{{url('assets-frontend')}}/images/brand-2.png" />
            </div>
            <div class="item">
                <img class="img-responsive" src="{{url('assets-frontend')}}/images/brand-3.png" />
            </div>
            <div class="item">
                <img class="img-responsive" src="{{url('assets-frontend')}}/images/brand-4.png" />
            </div>
            <div class="item">
                <img class="img-responsive" src="{{url('assets-frontend')}}/images/brand-5.png" />
            </div>
            <div class="item">
                <img class="img-responsive" src="{{url('assets-frontend')}}/images/brand-6.png" />
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>


@stop
