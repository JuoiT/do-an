@extends('frontend.master')

@section('main')

    <link rel="stylesheet" href="{{ url('assets-frontend') }}/css/page/check_out.css">

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
                    <li>Checkout</li>
                </ul>
                <h1 class="page-tit">Checkout</h1>
            </div>
        </div>
    </section>

    <div class="content-part checkout-page wow fadeInUp">
        <div class="container">
            @if (Auth()->user())
                @if ($items)
                    <div class="checkout-info text-left">
                        <form action="{{ route('checkout.submit') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            {{-- <input type="hidden" name="quantity" value="{{ $totalQuantity }}">
                            <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                            <input type="hidden" name="items" value="{{ json_encode($items) }}"> --}}
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <h2 class="checkout-head">Billing & Shipping details</h2>
                                    <div class="checkout-form text-left">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="name" class="form-control"
                                                value="{{ Auth::user()->name }}" placeholder="Name" required />
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="phone" class="form-control"
                                                value="{{ Auth::user()->phone }}" placeholder="Phone" required />
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="email" class="form-control"
                                                value="{{ Auth::user()->email }}" placeholder="Email" required />
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="selectdiv">
                                                <select id="ship_id" class="form-control" name="ship_id">
                                                    @foreach ($ships as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ old('ship_id') == $item->id ? 'selected' : '' }}>
                                                            {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="selectdiv">
                                                <select id="payment_id" class="form-control" name="payment_id">
                                                    @foreach ($payments as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ old('payment_id') == $item->id ? 'selected' : '' }}>
                                                            {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="address" class="form-control"
                                                value="{{ Auth::user()->address }}" placeholder="Address" required />
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <textarea cols="" rows="5" class="form-control" placeholder="Order notes"
                                                name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12" id="checkout-table">

                                </div>
                                <div class="coupon wow fadeInUp">
                                    <div class="row">
                                        <div class="col col-xs-12 col-sm-8">
                                            <input class="coupon_text" type="text" id="coupon-code"
                                                placeholder="Coupon code" name="coupon_code"
                                                value="{{ old('coupon_code') }}" />
                                        </div>
                                        <div class="col col-sm-4 col-xs-12">
                                            <button class="coupon-btn" type="button" id="apply-coupon">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit">PLACE ORDER</button>
                        </form>
                    </div>
                @else
                    <h2>Nothing here! <a style="color: green" href="{{ route('product') }}">Shopping now!</a></h2>
                @endif
            @else
                <div class="w-100 text-center">
                    <h3 class="text-center">
                        <a class="text-center" href="{{ route('login') }}">Login</a>
                        <span> to continue!</span>
                    </h3>
                </div>
            @endif
        </div>
    </div>

@stop
@section('script')
    <script src="{{ url('assets-frontend') }}/js/check-out.js"></script>
    <script src="{{ url('assets-frontend') }}/js/jquery.event.move.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            sendField();
            
            $('#apply-coupon').on('click', function() {
                sendField();
            });
            $('#ship_id').on('change', function() {
                sendField();
            });
        });

        function sendField() {
            var ajaxurl = 'checkout/table';

            $.ajax({
                type: "GET",
                url: ajaxurl,
                data: {
                    _token: "{{ csrf_token() }}",
                    coupon: $('#coupon-code').val(),
                    ship_id: $('#ship_id').val(),
                },

                success: function(data) {
                    console.log('sendField work');
                    $('#checkout-table').html(data);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }
    </script>
@endsection
