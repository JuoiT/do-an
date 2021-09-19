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
                    <li>Login</li>
                </ul>
                <h1 class="page-tit">Login</h1>
            </div>
        </div>
    </section>

    <div class="content-part account-page wow fadeInUp">
        <div class="container">
            <div class="myaccount-form text-left">
                <div class="row">
                    <div class="main">

                        <form class="account-form-login" method="POST" action="{{ route('post_login') }}">
                            @csrf

                            <h2 class="text-left text-capitalize">Login</h2>

                            <input type="text" id="email" name="email" class="form-control" placeholder="Your Email" />

                            <input type="text" id="phone" name="phone" maxlength="10" class="form-control"
                                placeholder="Your Phone" />

                            <input type="password" name="password" class="form-control" placeholder="Password" />

                            <label>
                                <input name="remember" type="checkbox">
                                <a> Remember me</a>
                            </label>

                            <label class="pull-right">
                                <span id="login-type" style="cursor: pointer"> Using phone number instead</span>
                            </label>

                            <button type="submit">LOGIN</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{ url('assets-frontend') }}/js/login-register.js"></script>
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
