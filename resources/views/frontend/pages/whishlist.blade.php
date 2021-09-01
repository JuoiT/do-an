@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/whishlist.css">

<!-- Back To Top -->
<div class="back-top">
    <i class="fal fa-chevron-up"></i>
</div>

<!-- Banner -->
<div class="banner">
    <img src="{{url('assets-frontend')}}/images/cart-page-banner.jpg" alt="">
</div>

<div class="container">
    <div class="container-main">
        <ul class="list-page">
            <li><a href="home.html">Home</a></li>
            <li>Whishlist</li>
        </ul>
        <h1 class="title">Whishlist</h1>
    </div>
    <div class="container-table">
        <div class="table-border">
            <table class="table-main">
                <thead>
                    <tr>
                        <th>PRODUCT</th>
                        <th>Name &amp; Description</th>
                        <th>Price</th>
                        <th>product status</th>
                        <th>add to cart</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cart-image-wrapper">
                            <a href="#"><img class="product-img" src="{{url('assets-frontend')}}/images/deal-img-4.jpg"
                                    alt=""></a>
                        </td>
                        <td class="product-tit"><a href="#">Strawberries, 16 oz</a></td>
                        <td class="price"><span class="money">$2.34 / ea</span></td>
                        <td>In stock</td>
                        <td class="total"><a class="add-to-cart" href="#">Add to cart</a></td>
                        <td class="del"><i class="far fa-times"></i></td>
                    </tr>

                    <tr>
                        <td class="cart-image-wrapper">
                            <a href="#"><img class="product-img" src="{{url('assets-frontend')}}/images/deal-img-5.jpg"
                                    alt=""></a>
                        </td>
                        <td class="product-tit"><a href="#">Broccoli, bunch</a></td>
                        <td class="price"><span class="money">$5.50 / ea</span></td>
                        <td>In stock</td>
                        <td class="total"><a class="add-to-cart" href="#">Add to cart</a></td>
                        <td class="del"><i class="far fa-times"></i></td>
                    </tr>

                    <tr>
                        <td class="cart-image-wrapper">
                            <a href="#"><img class="product-img" src="{{url('assets-frontend')}}/images/deal-img-2.jpg"
                                    alt=""></a>
                        </td>
                        <td class="product-tit"><a href="#">Strawberries, 16 oz</a></td>
                        <td class="price"><span class="money">$3.57 / ea</span></td>
                        <td>In stock</td>
                        <td class="total"><a class="add-to-cart" href="#">Add to cart</a></td>
                        <td class="del"><i class="far fa-times"></i></td>
                    </tr>

                    <tr>
                        <td class="cart-image-wrapper">
                            <a href="#"><img class="product-img" src="{{url('assets-frontend')}}/images/deal-img-1.jpg"
                                    alt=""></a>
                        </td>
                        <td class="product-tit"><a href="#">Broccoli, bunch</a></td>
                        <td class="price"><span class="money">$4.25 / ea</span></td>
                        <td>In stock</td>
                        <td class="total"><a class="add-to-cart" href="#">Add to cart</a></td>
                        <td class="del"><i class="far fa-times"></i></td>
                    </tr>

                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@stop
