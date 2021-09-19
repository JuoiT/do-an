@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/library/bootstrap-slider.min.css">
<link rel="stylesheet" href="{{url('assets-frontend')}}/css/page/product.css">

<section class="sub-banner wow fadeInUp">
    <img class="banner" src="{{url('assets-frontend')}}/images/product-page-banner.jpg" />
</section>

<section class="breadcrumb-section wow fadeInUp">
    <div class="container">
        <div class="breadcrumb">
            <ul class="list-inline">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>Products</li>
            </ul>
            <h1 class="page-tit">Products</h1>
        </div>
    </div>
</section>

<div class="content-part listing-page">
    <div class="container">
        <div class="row">
            <aside class="col-md-4 col-sm-12 col-xs-12 wow fadeInLeft">
                <div id="sidebar">
                    <div class="widget categories-widget">
                        <div class="widget-tit">
                            <h2>Categories</h2>
                            <div class="button" data-toggle="collapse" data-target="#categories">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <div class="widget-contian" id="categories">
                            <ul class="level-1">
                                <li>
                                    <a href="#">Vegetables</a>
                                </li>
                                <li>
                                    <a href="#">Fruits</a>
                                </li>
                                <li>
                                    <a href="#">Organic Fruits</a>
                                </li>
                                <li>
                                    <a href="#">Nut</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget top-seller-widget" data-toggle="collapse" data-target="#top-seller">
                        <div class="widget-tit">
                            <h2>top seller</h2>
                            <div class="button">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <div class="widget-contian" id="top-seller">
                            <div class="seller-box">
                                <div class="seller-img">
                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/top-seller-img-1.jpg" />
                                </div>
                                <div class="seller-text">
                                    <a class="seller-name" href="#">Lmao</a>
                                    <div class="ratting">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">$1.00</div>
                                </div>
                            </div>
                            <div class="seller-box">
                                <div class="seller-img">
                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/top-seller-img-2.jpg" />
                                </div>
                                <div class="seller-text">
                                    <a class="seller-name" href="#">Bru</a>
                                    <div class="ratting">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">$2.00</div>
                                </div>
                            </div>
                            <div class="seller-box">
                                <div class="seller-img">
                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/top-seller-img-3.jpg" />
                                </div>
                                <div class="seller-text">
                                    <a class="seller-name" href="#">Dak</a>
                                    <div class="ratting">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">$3.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget tag-widgwet">
                        <div class="widget-tit">
                            <h2>Popular tags</h2>
                            <div class="button" data-toggle="collapse" data-target="#tag">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <div class="widget-contian" id="tag">
                            <div class="tag-div">
                                <a class="tag-btn" href="#">Bru</a>
                                <a class="tag-btn" href="#">Lmao</a>
                                <a class="tag-btn" href="#">Dảkádasd</a>
                                <a class="tag-btn" href="#">Mlem</a>
                                <a class="tag-btn" href="#">Mòe</a>
                                <a class="tag-btn" href="#">Luan nv</a>
                                <a class="tag-btn" href="#">Bla</a>
                                <a class="tag-btn" href="#">Blu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="col-md-8 col-sm-12 col-xs-12 wow fadeInRight">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="filter">
                            <div class="r-part">
                                <div class="shorting-box-1">
                                    <label class="shorting-label">Short By:</label>
                                    <select id="exampleSelect1">
                                        <option>Default</option>
                                        <option>A To Z</option>
                                        <option>Z To A</option>
                                    </select>
                                </div>
                                <div class="shorting-box-2">
                                    <label class="shorting-label">Show:</label>
                                    <select id="exampleSelect2">
                                        <option>12</option>
                                        <option>24</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>
                            <div class="l-part">
                                <div>Showing
                                    <span>1–20</span> of
                                    <span>30 results</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="products" class="product-list list-group">
                        <div class="col-sm-4 col-xs-12 wow fadeInUp item">
                            <div class="wrapper">
                                <div class="pro-img">
                                    <a href="{{route('detail')}}">
                                        <img class="img-responsive" src="{{url('assets-frontend')}}/images/product-img-1.jpg" />
                                    </a>
                                </div>
                                <div class="contain-wrapper">
                                    <div class="tit">
                                        <a href="{{route('detail')}}">Lmao</a>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <div class="new-price">$2.00</div>
                                        <div class="old-price">
                                            <del>$7.00</del>
                                        </div>
                                    </div>
                                    <div class="btn-part">
                                        <a href="{{route('cart')}}" class="cart-btn">buy now</a>
                                        <i class="icon-basket-supermarket"></i>
                                    </div>
                                    <div class="btn-part">
                                        <a href="{{route('whishlist')}}" class="cart-btn">whishlist</a>
                                        <i class="icon-heart"></i>
                                    </div>
                                </div>
                                <div class="sale">sale</div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12 wow fadeInUp item">
                            <div class="wrapper">
                                <div class="pro-img">
                                    <a href="{{route('detail')}}">
                                        <img class="img-responsive" src="{{url('assets-frontend')}}/images/product-img-2.jpg" />
                                    </a>
                                </div>
                                <div class="contain-wrapper">
                                    <div class="tit">
                                        <a href="{{route('detail')}}">Bru</a>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <div class="new-price">$3.00</div>
                                        <div class="old-price">
                                            <del>$6.00</del>
                                        </div>
                                    </div>
                                    <div class="btn-part">
                                        <a href="{{route('cart')}}" class="cart-btn">buy now</a>
                                        <i class="icon-basket-supermarket"></i>
                                    </div>
                                    <div class="btn-part">
                                        <a href="{{route('whishlist')}}" class="cart-btn">whishlist</a>
                                        <i class="icon-heart"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12 wow fadeInUp item">
                            <div class="wrapper">
                                <div class="pro-img">
                                    <a href="{{route('detail')}}">
                                        <img class="img-responsive" src="{{url('assets-frontend')}}/images/product-img-3.jpg" />
                                    </a>
                                </div>
                                <div class="contain-wrapper">
                                    <div class="tit">
                                        <a href="{{route('detail')}}">Mlem</a>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <div class="new-price">$4.00</div>
                                        <div class="old-price">
                                            <del>$6.00</del>
                                        </div>
                                    </div>
                                    <div class="btn-part">
                                        <a href="{{route('cart')}}" class="cart-btn">buy now</a>
                                        <i class="icon-basket-supermarket"></i>
                                    </div>
                                    <div class="btn-part">
                                        <a href="route('whishlist')" class="cart-btn">whishlist</a>
                                        <i class="icon-heart"></i>
                                    </div>
                                </div>
                                <div class="new">new</div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12 wow fadeInUp item">
                            <div class="wrapper">
                                <div class="pro-img">
                                    <a href="{{route('detail')}}">
                                        <img class="img-responsive" src="{{url('assets-frontend')}}/images/product-img-1.jpg" />
                                    </a>
                                </div>
                                <div class="contain-wrapper">
                                    <div class="tit">
                                        <a href="{{route('detail')}}">Bru</a>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <div class="new-price">$3.00</div>
                                        <div class="old-price"><del>$6.00</del></div>
                                    </div>
                                    <div class="btn-part">
                                        <a href="{{route('cart')}}" class="cart-btn">buy now</a>
                                        <i class="icon-basket-supermarket"></i>
                                    </div>
                                    <div class="btn-part">
                                        <a href="{{route('whishlist')}}" class="cart-btn">whishlist</a>
                                        <i class="icon-heart"></i>
                                    </div>
                                </div>
                                <div class="sale">sale</div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12 wow fadeInUp item">
                            <div class="wrapper">
                                <div class="pro-img">
                                    <a href="{{route('detail')}}">
                                        <img class="img-responsive" src="{{url('assets-frontend')}}/images/product-img-2.jpg" />
                                    </a>
                                </div>
                                <div class="contain-wrapper">
                                    <div class="tit">
                                        <a href="{{route('detail')}}">Bla Bla</a>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <div class="new-price">$4.00</div>
                                        <div class="old-price">
                                            <del>$5.00</del>
                                        </div>
                                    </div>
                                    <div class="btn-part">
                                        <a href="{{route('cart')}}" class="cart-btn">buy now</a>
                                        <i class="icon-basket-supermarket"></i>
                                    </div>
                                    <div class="btn-part">
                                        <a href="route('whishlist')" class="cart-btn">whishlist</a>
                                        <i class="icon-heart"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12 wow fadeInUp item">
                            <div class="wrapper">
                                <div class="pro-img">
                                    <a href="{{route('detail')}}">
                                        <img class="img-responsive" src="{{url('assets-frontend')}}/images/product-img-3.jpg" />
                                    </a>
                                </div>
                                <div class="contain-wrapper">
                                    <div class="tit">
                                        <a href="{{route('detail')}}">Mòe lol</a>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-2.png">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <div class="new-price">$4.00</div>
                                        <div class="old-price">
                                            <del>$7.00</del>
                                        </div>
                                    </div>
                                    <div class="btn-part">
                                        <a href="{{route('cart')}}" class="cart-btn">buy now</a>
                                        <i class="icon-basket-supermarket"></i>
                                    </div>
                                    <div class="btn-part">
                                        <a href="route('whishlist')" class="cart-btn">whishlist</a>
                                        <i class="icon-heart"></i>
                                    </div>
                                </div>
                                <div class="new">new</div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 wow fadeInUp item">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item indicator left">
                                        <a class="page-link" href="#">
                                            <i class="icon-right-arrow"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link active" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item indicator right">
                                        <a class="page-link" href="#">
                                            <i class="icon-right-arrow"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('script')
<script src="{{url('assets-frontend')}}/js/bootstrap-slider.min.js"></script>
<script src="{{url('assets-frontend')}}/js/product.js"></script>
@stop