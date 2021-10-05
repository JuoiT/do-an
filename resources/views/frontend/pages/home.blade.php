@extends('frontend.master')

@section('main')

<link href="{{url('assets-frontend')}}/css/page/home.css" rel="stylesheet"/>
<link href="{{url('assets-frontend')}}/css/library/responsive-slider.css" rel="stylesheet"/>

<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
    <div class="slides" data-group="slides">
        <ul>
            @foreach($slide as $value)
            <li>
                <div class="slide-body" data-group="slide">
                    <img src="{{url('upload-slide')}}/{{$value->image}}">
                    <div class="carouseal-caption">
                        <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
                            <div class="sub-tit">
                                <a href="{{$value->link}}">{{$value->name}}</a>
                            </div>
                            <h2>
                                <!-- <span></span> -->
                                {{$value->content}}
                            </h2>
                            <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">{{$value->caption}}</div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="clearfix"></div>

<section class="fress-entry-section">
    <div class="pos-absolute">
        <div class="container">
            <div class="row">
                @foreach($banner_pro as $value)
                <div class="col-sm-4 col-xs-12 wow bounce">
                    <img class="img-responsive" src="{{url('upload-banner')}}/{{$value->image}}"/>
                    <div class="tit-btn-wrapper">
                        <div class="tit">
                            <span>{{explode(' ', $value->name, 2)[0]}}</span> {{explode(' ', $value->name, 2)[1]}}
                        </div>
                        <a href="{{$value->link}}" class="btn">View Collections</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>
<div class="clearfix"></div>

<section class="new-arrivals-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 wow fadeInUp">
                <div class="section-tit">
                    <div class="inner">
                        <h2>
                            <span>New</span> Product
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="1.2s">
                <div class="owl-carousel owl-theme new-arrivals-slider">
                    @foreach($new_product as $value)
                    <div class="item">
                        <div class="wrapper">
                            <div class="pro-img">
                                <img class="img-responsive" src="{{url('upload-images')}}/{{$value->image}}"/>
                            </div>
                            <div class="contain-wrapper">
                                <div class="tit">{{$value->name}}</div>
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
                                    <div class="new-price">${{$value->sale_price == 0 ? "$value->price" : "$value->sale_price"}}</div>
                                    <div class="old-price">
                                        <del>{{$value->sale_price == 0 ? '' : "$$value->price"}}</del>
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <a href="{{route('cart')}}" class="cart-btn">buy now</a>
                                    <i class="icon-shopping-basket"></i>
                                </div>
                                <div class="btn-part">
                                    <a href="{{route('whishlist')}}" class="cart-btn">whishlist</a>
                                    <i class="icon-heart-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                        <h2>
                            <span>Best</span> seller
                        </h2>
                    </div>
                </div>
                <?php $i = 1; ?>
                <div class="filter-part">
                    <div class="col-lg-4 col-md-5 col-sm-8 col-xs-12 center-part">
                        <div class="slider-bg wow slideInDown">
                            <img class="img-responsive bg" src="{{url('assets-frontend')}}/images/slider-bg-1.png"/>
                            <div class="pos-abs">
                                <div class="owl-carousel owl-theme deal-slider">
                                    <div class="item">
                                        <div class="pro-img">
                                            <a href="{{route('detail', 1)}}">
                                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/deal-img-7.png"/>
                                            </a>
                                        </div>
                                        <div class="contain-wrapper">
                                            <div class="tit">
                                                <a href="{{route('detail', 1)}}">Ngu như chó</a>
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
                                                <i class="icon-shopping-basket"></i>
                                            </div>
                                            <div class="btn-part">
                                                <a href="{{route('whishlist')}}" class="cart-btn">whishlist</a>
                                                <i class="icon-heart-empty"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pro-img">
                                            <a href="{{route('detail', 1)}}">
                                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/deal-img-7.png"/>
                                            </a>
                                        </div>
                                        <div class="contain-wrapper">
                                            <div class="tit">
                                                <a href="{{route('detail', 1)}}">Óc chó</a>
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
                                                    <del>$5.00</del>
                                                </div>
                                            </div>
                                            <div class="btn-part">
                                                <a href="{{route('cart')}}" class="cart-btn">buy now</a>
                                                <i class="icon-shopping-basket"></i>
                                            </div>
                                            <div class="btn-part">
                                                <a href="{{route('whishlist')}}" class="cart-btn">whishlist</a>
                                                <i class="icon-heart-empty"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pro-img">
                                            <a href="{{route('detail', 1)}}">
                                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/deal-img-7.png"/>
                                            </a>
                                        </div>
                                        <div class="contain-wrapper">
                                            <div class="tit">
                                                <a href="{{route('detail', 1)}}">Lmao Bru</a>
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
                                                    <del>$4.00</del>
                                                </div>
                                            </div>
                                            <div class="btn-part">
                                                <a href="{{route('cart')}}" class="cart-btn">buy now</a>
                                                <i class="icon-shopping-basket"></i>
                                            </div>
                                            <div class="btn-part">
                                                <a href="{{route('whishlist')}}" class="cart-btn">whishlist</a>
                                                <i class="icon-heart-empty"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <div id="myBtnContainer" class="wow fadeInLeft">
                            /<button class="btn active" onclick="filterSelection('all')">All</button>/
                            @foreach($category as $value)
                                @if($value->products_count != 0)
                                    <button class="btn" onclick="filterSelection('{{$value->id}}')"> {{$value->name}}</button>/
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pull-left wow fadeInLeft">
                        @foreach($sale_product as $value)
                            @if($i % 2 == 1)
                                <div class="filterDiv all">
                                    <div class="img-part">
                                        <img class="img-responsive" src="{{url('upload-images')}}/{{$value->image}}"/>
                                    </div>
                                    <div class="text-part">
                                        <div class="box-tit">{{$value -> name}}</div>
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
                                            <div class="new-price">${{$value->sale_price == 0 ? "$value->price" : "$value->sale_price"}}</div>
                                            <div class="old-price">
                                                <del>{{$value->sale_price == 0 ? '' : "$$value->price"}}</del>
                                            </div>
                                        </div>
                                        <div class="btn-part">
                                            <a href="{{route('cart')}}" class="cart-btn">buy now</a>
                                            <i class="icon-shopping-basket"></i>
                                        </div>
                                        <div class="btn-part">
                                            <a href="{{route('whishlist')}}" class="cart-btn">whishlist</a>
                                            <i class="icon-heart-empty"></i>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <?php $i+=1 ?>
                            @if($i > 6)
                                @break
                            @endif
                        @endforeach
                        <?php $i =1; ?>
                        @foreach($category as $_value)
                            @foreach($sale_product as $value)
                                @if($value->category_id == $_value->id)
                                    @if($i % 2 == 1)
                                        <div class="filterDiv {{$_value->id}}">
                                            <div class="img-part">
                                                <img class="img-responsive" src="{{url('upload-images')}}/{{$value->image}}"/>
                                            </div>
                                            <div class="text-part">
                                                <div class="box-tit">{{$value -> name}}</div>
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
                                                    <div class="new-price">${{$value->sale_price == 0 ? "$value->price" : "$value->sale_price"}}</div>
                                                    <div class="old-price">
                                                        <del>{{$value->sale_price == 0 ? '' : "$$value->price"}}</del>
                                                    </div>
                                                </div>
                                                <div class="btn-part">
                                                    <a href="{{route('cart')}}" class="cart-btn">buy now</a>
                                                    <i class="icon-shopping-basket"></i>
                                                </div>
                                                <div class="btn-part">
                                                    <a href="{{route('whishlist')}}" class="cart-btn">whishlist</a>
                                                    <i class="icon-heart-empty"></i>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <?php $i+=1 ?>
                                    @if( $i > 6)
                                        @break
                                    @endif
                                @endif
                            @endforeach
                            <?php $i = 1; ?>
                        @endforeach
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pull-right wow fadeInRight">
                        @foreach($sale_product as $value)
                            @if($i % 2 == 0)
                                <div class="filterDiv all">
                                    <div class="img-part">
                                        <img class="img-responsive" src="{{url('upload-images')}}/{{$value->image}}"/>
                                    </div>
                                    <div class="text-part">
                                        <div class="box-tit">{{$value->name}}</div>
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
                                            <div class="new-price">${{$value->sale_price == 0 ? "$value->price" : "$value->sale_price"}}</div>
                                            <div class="old-price">
                                                <del>{{$value->sale_price == 0 ? '' : "$$value->price"}}</del>
                                            </div>
                                        </div>
                                        <div class="btn-part">
                                            <a href="{{route('cart')}}" class="cart-btn">buy now</a>
                                            <i class="icon-shopping-basket"></i>
                                        </div>
                                        <div class="btn-part">
                                            <a href="{{route('whishlist')}}" class="cart-btn">whishlist</a>
                                            <i class="icon-heart-empty"></i>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <?php $i+=1 ?>
                            @if($i > 6)
                                @break
                            @endif
                        @endforeach
                        <?php $i =1; ?>
                        @foreach($category as $_value)
                            @foreach($sale_product as $value)
                                @if($value->category_id == $_value->id)
                                    @if($i % 2 == 0)
                                        <div class="filterDiv {{$_value->id}}">
                                            <div class="img-part">
                                                <img class="img-responsive" src="{{url('upload-images')}}/{{$value->image}}"/>
                                            </div>
                                            <div class="text-part">
                                                <div class="box-tit">{{$value -> name}}</div>
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
                                                    <div class="new-price">${{$value->sale_price == 0 ? "$value->price" : "$value->sale_price"}}</div>
                                                    <div class="old-price">
                                                        <del>{{$value->sale_price == 0 ? '' : "$$value->price"}}</del>
                                                    </div>
                                                </div>
                                                <div class="btn-part">
                                                    <a href="{{route('cart')}}" class="cart-btn">buy now</a>
                                                    <i class="icon-shopping-basket"></i>
                                                </div>
                                                <div class="btn-part">
                                                    <a href="{{route('whishlist')}}" class="cart-btn">whishlist</a>
                                                    <i class="icon-heart-empty"></i>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <?php $i+=1 ?>
                                    @if($i > 6)
                                        @break
                                    @endif
                                @endif
                            @endforeach
                            <?php $i =1; ?>
                        @endforeach
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
                    <div class="section-name">
                        <span>fresh</span> Fruits
                    </div>
                    <a href="#" class="shop-btn">shop now</a>
                </div>
            </div>
            <div class="col-sm-4  rpart  wow slideInRight">
                <div class="bg equal-height">
                    <div class="free-shipping">freee shipping</div>
                    <p>With order over $1000</p>
                    <a href="#" class="shop-btn-1">shop now</a>
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
                        <h2>
                            <span>Organic</span> news
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row no-gutter">
            @foreach($banner_blog as $key => $value)
            <div class="col-sm-3 col-xs-12 wow {{($key == 0 || $key == 1) ? 'slideInLeft' : 'slideInRight'}}" data-wow-duration="1s" data-wow-delay="{{($key == 1 || $key == 2) ? '1.3s' : '2.3s'}}">
                <div class="wrapper">
                    <img class="img-responsive" src="{{url('upload-banner')}}/{{$value->image}}"/>
                    <div class="overlay"></div>
                    <div class="text">
                        <div class="date">{{$value->created_at}}</div>
                        <div class="title">
                            <a href="{{$value->link}}">{{$value->name}}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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
                        <h2>
                            <span>delivery</span> process
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 first wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="icon-part">
                    <img class="img-responsive center-block" src="{{url('assets-frontend')}}/images/step-1.png"/>
                    <i class="icon-basket"></i>
                </div>
                <div class="process-name">
                    <div class="step">step 01</div>
                    <p>Choose one or more products</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 second wow fadeIn" data-wow-duration="1s" data-wow-delay="1.3s">
                <div class="icon-part">
                    <img class="img-responsive center-block" src="{{url('assets-frontend')}}/images/step-2.png"/>
                    <i class="icon-home"></i>
                </div>
                <div class="process-name">
                    <div class="step">step 02</div>
                    <p>Determine our Farm</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 third wow fadeIn" data-wow-duration="1s" data-wow-delay="2.3s">
                <div class="icon-part">
                    <img class="img-responsive center-block" src="{{url('assets-frontend')}}/images/step-3.png"/>
                    <i class="icon-map-pin"></i>
                </div>
                <div class="process-name">
                    <div class="step">step 03</div>
                    <p>Write Your Location</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 fourth wow fadeIn" data-wow-duration="1s" data-wow-delay="3.3s">
                <div class="icon-part">
                    <img class="img-responsive center-block" src="{{url('assets-frontend')}}/images/step-4.png"/>
                    <i class="icon-truck"></i>
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
                <img class="img-responsive" src="{{url('assets-frontend')}}/images/brand-1.png"/>
            </div>
            <div class="item">
                <img class="img-responsive" src="{{url('assets-frontend')}}/images/brand-2.png"/>
            </div>
            <div class="item">
                <img class="img-responsive" src="{{url('assets-frontend')}}/images/brand-3.png"/>
            </div>
            <div class="item">
                <img class="img-responsive" src="{{url('assets-frontend')}}/images/brand-4.png"/>
            </div>
            <div class="item">
                <img class="img-responsive" src="{{url('assets-frontend')}}/images/brand-5.png"/>
            </div>
            <div class="item">
                <img class="img-responsive" src="{{url('assets-frontend')}}/images/brand-6.png"/>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
@stop

@section('script')
<script src="{{url('assets-frontend')}}/js/responsive-slider.js"></script>
<script src="{{url('assets-frontend')}}/js/jquery.event.move.js"></script>
<script src="{{url('assets-frontend')}}/js/home.js"></script>
@stop
