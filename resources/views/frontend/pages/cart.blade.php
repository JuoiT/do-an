@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/page/cart.css">

<section class="sub-banner wow fadeInUp">
    <img class="banner" src="{{url('assets-frontend')}}/images/cart-page-banner.jpg"/>
</section>

<section class="breadcrumb-section wow fadeInUp">
    <div class="container">
        <div class="breadcrumb">
            <ul class="list-inline">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>Cart</li>
            </ul>
            <h1 class="page-tit">Cart</h1>
        </div>
    </div>
</section>

<div class="content-part cart-page">
    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover table-responsive wow fadeInUp">
                <thead>
                    <tr>
                        <th class="product">PRODUCT</th>
                        <th class="name">Name</th>
                        <th class="price">Price</th>
                        <th class="quantity">Quantity</th>
                        <th class="total">Total</th>
                        <th class="cancle"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $value)
                    <tr>
                        <td class="cart-image-wrapper">
                            <a href="#">
                                <img class="cart-image" src="{{url('upload-images')}}/{{$value['image']}}" alt="">
                            </a>
                        </td>
                        <td class="product-tit">
                            <a href="#">{{$value['name']}}</a>
                        </td>
                        <td class="price">
                            <span class="money">${{$value['price']}}</span>
                        </td>
                        <td>
                            <div class="qty">
                                <input type="number" name="quantity" value="{{$value['quantity']}}" min="1">
                            </div>
                        </td>
                        <td class="total">${{$value['price'] * $value['quantity']}}</td>
                        <td class="cancle">
                            <a href="#">
                                <i class="icon-cancel"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <div class="l-part">
                                <a class="continue-shopping-btn" href="#">Continue Shopping
                                    <i class="icon-right"></i>
                                </a>
                            </div>
                            <div class="r-part">
                                <a class="cancle-cart-btn" href="#">
                                    <i class="icon-cancel"></i>delete cart
                                </a>
                                <a class="update-cart-btn" href="{{route('cart.update')}}">
                                    <i class="icon-arrows-cw"></i>update cart
                                </a>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="coupon wow fadeInUp">
            <label>Coupon Code</label>
            <input class="coupon_text" type="text" name=""/>
            <button class="coupon-btn">Apply Now</button>
        </div>
        <div class="row">
            <div class="col-md-5 col-sm-6 col-sm-12 pull-right wow fadeInRight">
                <div class="total-box">
                    <div class="tit">Shopping Cart Total</div>
                    <div class="total-box-inner">
                        <div class="sub-total">
                            <span>Subtotal </span>
                            <span class="price">$10.00</span>
                        </div>
                        <div class="grand-total">
                            <span>Grand Total </span>
                            <span class="price">$12.00</span>
                        </div>
                        <a class="checkout-btn" href="#">
                            <i class="icon-ok"></i>Proceed to checkout
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-6 col-sm-12 pull-left wow fadeInLeft">
                <div class="tax-box">
                    <div class="tit">Estimate Shipping and Tax</div>
                    <div class="tax-box-inner">
                        <p>Enter your destination to get a shipping estimate.</p>
                        <label>Country</label>
                        <select>
                            <option>Vietnamese</option>
                            <option>United States</option>
                            <option>China</option>
                            <option>Japanese</option>
                        </select>
                        <label>Province</label>
                        <select>
                            <option>Hanoi</option>
                            <option>Thanh Hoa</option>
                            <option>Sai Gon</option>
                            <option>Nghe An</option>
                        </select>
                        <label>Specific address</label>
                        <input class="postal-text" type="text" name="address"/>
                        <!-- <button class="quote"><i class="icon-file"></i>Get a Quote</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('script')
<script src="{{url('assets-frontend')}}/js/jquery.event.move.js"></script>
<script src="{{url('assets-frontend')}}/js/cart.js"></script>
@endsection
