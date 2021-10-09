@extends('frontend.master')

@section('main')

    <link rel="stylesheet" href="{{ url('assets-frontend') }}/css/page/login-register.css" />

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
                    <li>Reset Password</li>
                </ul>
                <h1 class="page-tit">Reset Password</h1>
            </div>
        </div>
    </section>

    <div class="content-part account-page wow fadeInUp">
        <div class="container">
            <div class="myaccount-form text-left">
                <div class="row">
                    <div class="main">

                        <form class="account-form-login" method="post" action="{{ route('password.reset') }}">
                            @csrf

                            <h2 class="text-left text-capitalize">Reset Password</h2>

                            <div class="input-field">
                                <label class="name-input" for="email">Email</label>
                                <input type="text" name="email" class="form-control required" placeholder="Your Email" />
                                @if ($errors->has('email'))
                                    <small class="asterisk_input">{{ $errors->first('email') }}</small>
                                @endif
                            </div>

                            <small>Don't have an account?<a style="color: green" href="{{route('register')}}"> Register now</a></small>

                            <button type="submit">Reset</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{ url('assets-frontend') }}/js/login-register.js"></script>
    <script src="{{ url('assets-frontend') }}/js/jquery.event.move.js"></script>
    <script>
        $("#phone").hide();

        $("#login-type").click(function(event) {
            event.preventDefault();

            if ($("#phone").is(":hidden")) {
                $("#email").hide();
                $("#phone").show();
                $("#login-type").text("Using email instead")
            } else {
                $("#phone").hide();
                $("#email").show();
                $("#login-type").text("Using phone number instead")
            }
        });
    </script>
@stop
