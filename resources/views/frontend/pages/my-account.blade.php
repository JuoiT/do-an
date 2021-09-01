@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/my_account.css">

<!-- Back To Top -->
<div class="back-top">
    <i class="fal fa-chevron-up"></i>
</div>

<!-- Banner -->
<div class="banner">
    <img src="{{url('assets-frontend')}}/images/cart-page-banner.jpg" alt="">
</div>
<!-- Form-main -->
<div class="form-container">
    <div class="product-container">
        <!-- Page Container -->
        <div class="container-main">
            <ul class="list-page">
                <li><a href="home.html">Home</a></li>
                <li>My Account</li>
            </ul>
            <h1 class="title">My Account</h1>
        </div>
        <!-- Form -->
        <div class="container-login">
            <div class="row">
                <!-- Form Login -->
                <div class="flogin-left">
                    <form id="form-lg" class="form-login">
                        <h2 class="tit">Login</h2>
                        <div class="form-group">
                            <input type="text" name="l_name" class="form-control" placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <input type="password" name="l_password" class="form-control" placeholder="password">
                        </div>
                        <div class="check-box">
                            <label>
                                <input name="remember" type="checkbox">
                                <span href=""> Remember me</span>
                            </label>
                            <label class="pull-right">
                                <input name="forgot pass" type="checkbox">
                                <span href=""> Forgot your Password</span>
                            </label>
                        </div>
                        <input type="submit" value="LOGIN">
                    </form>
                </div>

                <!-- Form Register -->
                <div class="flogin-right">
                    <form id="form-register" class="form-reg">
                        <h2 class="tit">Register</h2>
                        <div class="form-group">
                            <input type="text" name="r_name" class="form-control" placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="r_email" class="form-control" placeholder="Your email">
                        </div>
                        <div class="form-group">
                            <input id="confirm_password" type="password" name="r_password" class="form-control"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" name="r_p_password" class="form-control"
                                placeholder="Repeat Password">
                        </div>
                        <label>
                            <input name="radio" type="radio" value="">
                            <span> Privacy Policy Agreement?</span>
                        </label>
                        <input type="submit" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@stop
