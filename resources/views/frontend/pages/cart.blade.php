@extends('frontend.master')

@section('main')

    <link rel="stylesheet" href="{{ url('assets-frontend') }}/css/page/cart.css">

    <section class="sub-banner wow fadeInUp">
        <img class="banner" src="{{ url('assets-frontend') }}/images/cart-page-banner.jpg" />
    </section>

    <section class="breadcrumb-section wow fadeInUp">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-inline">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>Cart</li>
                </ul>
                <h1 class="page-tit">Cart</h1>
            </div>
        </div>
    </section>

    <div class="content-part cart-page">
        @if ($items)
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
                            @foreach ($items as $item)
                                <tr>
                                    <td class="cart-image-wrapper">
                                        <a href="{{ route('detail', $item['product_id']) }}">
                                            <img style="width: 100px; height: 100px;" class="cart-image"
                                                src="{{ url('upload-images') }}/{{ $item['image'] }}" alt="">
                                        </a>
                                    </td>
                                    <td class="product-tit">
                                        <a href="{{ route('detail', $item['product_id']) }}">{{ $item['name'] }}</a>
                                    </td>
                                    <td class="price">
                                        <span class="money">{{ toUsd($item['price']) }}</span>
                                    </td>
                                    <td>
                                        <div class="qty">
                                            <input type="number" dataId="{{ $item['product_id'] }}" class="quantity-field"
                                                id="qtt-{{ $item['product_id'] }}" name="quantity"
                                                value={{ $item['quantity'] }} min="0">
                                        </div>
                                    </td>
                                    <td class="total">{{ $item['quantity'] * $item['price'] }}</td>
                                    <td class="cancle">
                                        <a href="{{ route('cart.remove-item', $item['product_id']) }}">
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
                                        <a class="cancle-cart-btn" href="{{ route('cart.remove-all') }}">
                                            <i class="icon-cancel"></i>delete cart
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                </div>
                {{-- <div class="coupon wow fadeInUp">
                <label>Coupon Code</label>
                <input class="coupon_text" type="text" name="" />
                <button class="coupon-btn">Apply Now</button>
            </div> --}}
                <div class="row">
                    {{-- <div class="col-md-7 col-sm-6 col-sm-12 pull-left wow fadeInLeft">
                        <div class="total-box">
                            <div class="total-box-inner">
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-5 col-sm-6 col-sm-12 pull-right wow fadeInRight">
                        <div class="total-box">
                            <div class="total-box-inner">
                                <div class="sub-total">
                                    <span>Total quantity </span>
                                    <span class="price">{{$totalQuantity}}</span>
                                </div>
                                <div class="grand-total">
                                    <span>Grand Total </span>
                                    <span class="price">{{toUsd($totalPrice)}}</span>
                                </div>
                                <a class="checkout-btn" href="{{route('checkout')}}">
                                    <i class="icon-ok"></i>Proceed to checkout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <h2>Nothing here! <a href="{{route('product')}}"></a></h2>
        @endif
    </div>

@stop

@section('script')
    <script src="{{ url('assets-frontend') }}/js/jquery.event.move.js"></script>
    <script src="{{ url('assets-frontend') }}/js/cart.js"></script>

    <script>
        $(document).ready(() => {
            $('.quantity-field').on('change', function() {
                id = this.id.split('-')[1];
                value = this.value;
                console.log(id);

                $.ajax({
                    type: "GET",
                    url: "cart/update",
                    data: {
                        _token: "{{ csrf_token() }}",
                        product_id: id,
                        quantity: value,
                    },

                    success: function(data) {
                        console.log('updated');
                        // console.log(data);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            })
        })
    </script>
@endsection
