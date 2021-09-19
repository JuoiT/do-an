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
                    <li>Register</li>
                </ul>
                <h1 class="page-tit">Register</h1>
            </div>
        </div>
    </section>

    <div class="content-part account-page wow fadeInUp">
        <div class="container">
            <div class="myaccount-form text-left">
                <div class="row">
                    <div class="main">

                        <form class="account-form-reg" method="POST" action="{{ route('register.register') }}" enctype="multipart/form-data">
                            @csrf

                            <h2 class="text-left text-capitalize">Register</h2>

                            <div class="input-field">
                                <input type="text" name="name" class="form-control required" placeholder="Name"
                                    required="required" value="{{ old('name') }}" />
                                @if ($errors->has('name'))
                                    <small style="color: orangered;">{{ $errors->first('name') }}</small>
                                @endif
                            </div>

                            <div class="input-field">
                                <input type="file" name="avatar" class="form-control" />
                                @if ($errors->has('avatar'))
                                    <small style="color: orangered;">{{ $errors->first('avatar') }}</small>
                                @endif
                            </div>

                            <div class="input-field">
                                <input type="email" name="email" class="form-control required" placeholder="Email"
                                    required="required" value="{{ old('email') }}" />
                                @if ($errors->has('email'))
                                    <small style="color: orangered;">{{ $errors->first('email') }}</small>
                                @endif
                            </div>

                            <div class="input-field">
                                <input type="text" maxlength="10" name="phone" class="form-control required"
                                    placeholder="Phone" required="required" value="{{ old('phone') }}" />
                                @if ($errors->has('phone'))
                                    <small style="color: orangered;">{{ $errors->first('phone') }}</small>
                                @endif
                            </div>

                            <div class="input-field">
                                <input type="text" name="address" class="form-control required" placeholder="Address"
                                    required="required" value="{{ old('address') }}" />
                                @if ($errors->has('address'))
                                    <small style="color: orangered;">{{ $errors->first('address') }}</small>
                                @endif
                            </div>

                            <div class="input-field">
                                <input type="password" name="password" class="form-control required" placeholder="Password"
                                    required="required" value="{{ old('password') }}" />
                                @if ($errors->has('password'))
                                    <small style="color: orangered;">{{ $errors->first('password') }}</small>
                                @endif
                            </div>

                            <div class="input-field">
                                <input type="password" name="password_confirmation" class="form-control required"
                                    placeholder="Repeat Password" required="required" />
                            </div>

                            <button type="submit">Register</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
