@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/page/check_out.css">

<section class="sub-banner wow fadeInUp">
    <img class="banner" src="{{url('assets-frontend')}}/images/cart-page-banner.jpg" />
</section>

<section class="breadcrumb-section wow fadeInUp">
    <div class="container">
        <div class="breadcrumb">
            <ul class="list-inline">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>Checkout</li>
            </ul>
            <h1 class="page-tit">Checkout</h1>
        </div>
    </div>
</section>

<div class="content-part checkout-page wow fadeInUp">
    <div class="container">
        <div class="checkout-info text-left">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h2 class="checkout-head">Billing & Shipping details</h2>
                        <div class="checkout-form text-left">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="name" class="form-control" placeholder="Name"/>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="" class="form-control" placeholder="Phone"/>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="" class="form-control" placeholder="Email"/>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="selectdiv">
                                    <select class="form-control">
                                        <option selected="selected">Province</option>
                                        <option>Ha Noi</option>
                                        <option>Sai Gon</option>
                                        <option>Thanh Hoa</option>
                                        <option>Nghe An</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="" class="form-control" placeholder="Address"/>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea cols="" rows="5" class="form-control" placeholder="Order notes"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h2 class="checkout-head">Your Order</h2>
                        <div class="checkout-order-table text-left">
                            <table class="table-responsive">
                                <thead>
                                    <tr class="th-head">
                                        <th scope="col" width="68%">PRODUCT</th>
                                        <th scope="col" width="42%">MONEY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Lmao x 2</td>
                                        <td>$5.00</td>
                                    </tr>
                                    <tr>
                                        <td>Bru x 2</td>
                                        <td>$5.00</td>
                                    </tr>
                                    <tr>
                                        <td>Mlem x 2</td>
                                        <td>$5.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <td>SUB TOTAL</td>
                                        <td>$15.00</td>
                                    </tr>
                                    <tr class="cart-shopping">
                                        <td>SHIPPING</td>
                                        <td>$2.00</td>
                                    </tr>
                                    <tr class="cart-total">
                                        <td>TOTAL</td>
                                        <td>$17.00</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <button type="submit">PLACE ORDER</button>
            </form>
        </div>
    </div>
</div>

@stop
@section('script')
<script src="{{url('assets-frontend')}}/js/check-out.js"></script>
@endsection
