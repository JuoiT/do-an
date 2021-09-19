@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/page/whishlist.css">

<section class="sub-banner wow fadeInUp">
    <img class="banner" src="{{url('assets-frontend')}}/images/cart-page-banner.jpg">
</section>
<section class="breadcrumb-section wow fadeInUp">
    <div class="container">
        <div class="breadcrumb">
            <ul class="list-inline">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>Shoping Cart</li>
            </ul>
            <h1 class="page-tit">Shoping Cart</h1>
        </div>
    </div>
</section>

<div class="content-part whishlist-page">
    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover table-responsive wow fadeInUp">
                <thead>
                    <tr>
                        <th class="product">PRODUCT</th>
                        <th class="name">Name</th>
                        <th class="price">Price</th>
                        <th class="quantity">Status</th>
                        <th class="total">Add to cart</th>
                        <th class="cancle"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cart-image-wrapper">
                            <a href="#">
                                <img class="cart-image" src="{{url('assets-frontend')}}/images/cart-img-1.jpg" alt="">
                            </a>
                        </td>
                        <td class="product-tit">
                            <a href="#">Lmao</a>
                        </td>
                        <td class="price">
                            <span class="money">$2.00</span>
                        </td>
                        <td>
                            In stock
                        </td>
                        <td class="total">
                            <a class="add-to-cart" href="#">Add to cart</a>
                        </td>
                        <td class="cancle">
                            <a href="#">
                                <i class="icon-cancel-music"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="cart-image-wrapper">
                            <a href="#">
                                <img class="cart-image" src="{{url('assets-frontend')}}/images/cart-img-2.jpg" alt="">
                            </a>
                        </td>
                        <td class="product-tit">
                            <a href="#">Bru</a>
                        </td>
                        <td class="price">
                            <span class="money">$2.00</span>
                        </td>
                        <td>
                            In stock
                        </td>
                        <td class="total">
                            <a class="add-to-cart" href="#">Add to cart</a>
                        </td>
                        <td class="cancle">
                            <a href="#">
                                <i class="icon-cancel-music"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="cart-image-wrapper">
                            <a href="#">
                                <img class="cart-image" src="{{url('assets-frontend')}}/images/cart-img-3.jpg" alt=""></a>
                            </td>
                        <td class="product-tit">
                            <a href="#">Dảk</a>
                        </td>
                        <td class="price">
                            <span class="money">$2.00</span>
                        </td>
                        <td>
                            In stock
                        </td>
                        <td class="total">
                            <a class="add-to-cart" href="#">Add to cart</a>
                        </td>
                        <td class="cancle">
                            <a href="#">
                                <i class="icon-cancel-music"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="cart-image-wrapper">
                            <a href="#">
                                <img class="cart-image" src="{{url('assets-frontend')}}/images/cart-img-4.jpg" alt="">
                            </a>
                        </td>
                        <td class="product-tit">
                            <a href="#">Mlem</a>
                        </td>
                        <td class="price">
                            <span class="money">$2.00</span>
                        </td>
                        <td>
                            In stock
                        </td>
                        <td class="total">
                            <a class="add-to-cart" href="#">Add to cart</a>
                        </td>
                        <td class="cancle">
                            <a href="#">
                                <i class="icon-cancel-music"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop
@section('script')
<script src="{{url('assets-frontend')}}/js/whishlist.js"></script>
@endsection
