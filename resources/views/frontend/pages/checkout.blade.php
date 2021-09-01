@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/check_out.css">

<!-- Back To Top -->
<div class="back-top">
    <i class="fal fa-chevron-up"></i>
</div>

<!-- Banner -->
<div class="banner">
    <img src="{{url('assets-frontend')}}/images/cart-page-banner.jpg" alt="">
</div>

<!-- Container  -->
<div class="container">
    <div class="container-main">
        <ul class="list-page">
            <li><a href="home.html">Home</a></li>
            <li>Checkout</li>
        </ul>
        <h1 class="title">Checkout</h1>
    </div>
    <div class="container-page">
        <div class="checkout-step-one">
            <h2 class="checkout-tit">01 / Checkout Method</h2>
            <p class="checkout-desc">If you have shopped with us before, please enter your details in the boxes. If
                you are a new customer. Please proceeed to the Billing &amp; Shipping Section.
            </p>
            <form id="form-lg">
                <div class="row">
                    <div class="row-left">
                        <input id="l_email" type="email" name="email" class="form-control"
                            placeholder="User name or Email">
                        <span class="l_email_blur"></span>
                    </div>
                    <div class="row-right">
                        <input id="l_password" type="password" name="password" class="form-control"
                            placeholder="password">
                    </div>
                    <div class="row-login">
                        <input type="submit" value="login" class="login">
                        <a href="#">Lost your password?</a>
                    </div>
                </div>
            </form>
        </div><!-- End Step One-->
        <div class="checkout-step-two">
            <div class="row">
                <div class="form-left">
                    <h2 class="checkout-tit">02 / Billing &amp; Shipping details</h2>
                    <form id="form-inf">
                        <div class="mg-short">
                            <div class="col-short">
                                <input type="text" name="f_name" class="form-control" placeholder="first name">
                            </div>
                            <div class="col-short">
                                <input type="text" name="l_name" class="form-control" placeholder="last name">
                            </div>
                        </div>
                        <div class="col-long">
                            <input type="text" name="company" class="form-control" placeholder="Company (optinal)">
                        </div>
                        <div class="mg-short">
                            <div class="col-short">
                                <input type="text" name="address" class="form-control" placeholder="Address">
                            </div>
                            <div class="col-short">
                                <input type="text" name="apt" class="form-control"
                                    placeholder="Apt, suite, etc. (optinal)">
                            </div>
                        </div>
                        <div class="mg-short mg-short-type">
                            <div class="col-short">
                                <div class="select-city">
                                    <select class="form-control">
                                        <option selected="selected">City</option>
                                        <option>New York</option>
                                        <option>Paris</option>
                                        <option>London</option>
                                        <option>Ha Noi</option>
                                        <option>PromPenh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-short">
                                <div class="select-state">
                                    <select class="form-control">
                                        <option selected="selected">State</option>
                                        <option>State 2</option>
                                        <option>State 3</option>
                                        <option>State 4</option>
                                        <option>State 5</option>
                                        <option>State 6</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-long">
                            <input type="text" name="postcode" class="form-control" placeholder="Postcode / ZIP">
                        </div>
                        <div class="mg-short">
                            <div class="col-short">
                                <input type="text" name="phone" class="form-control" placeholder="phone">
                            </div>
                            <div class="col-short">
                                <input type="text" name="sh-email" class="form-control" placeholder="email">
                            </div>
                        </div>
                        <div class="col-long">
                            <label>
                                <input name="save_info" type="checkbox">
                                <span> Save this information for next time</span>
                            </label>
                            <textarea placeholder="Order notes" name="order-note"></textarea>
                            <label>
                                <input name="add check" type="checkbox" value="">
                                <span> Ship to a different address?</span>
                            </label>
                        </div>
                    </form>
                </div>
                <!-- form right -->
                <div class="form-right">
                    <h2 class="checkout-head">Your Order</h2>
                    <div class="table-price">
                        <table>
                            <thead>
                                <tr class="th-head">
                                    <th scope="col" width="68%">PRODCUT</th>
                                    <th scope="col" width="42%">TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Broccoli, bunch x 2</td>
                                    <td>$ 5.00</td>
                                </tr>
                                <tr>
                                    <td>Broccoli, bunch x 2</td>
                                    <td>$ 5.00</td>
                                </tr>
                                <tr>
                                    <td>Broccoli, bunch x 2</td>
                                    <td>$ 5.00</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <td>SUB TOTAL</td>
                                    <td>$ 5.00</td>
                                </tr>
                                <tr class="cart-shopping">
                                    <td>SHIPPING</td>
                                    <td>Flat rate: $ 2.00</td>
                                </tr>
                                <tr class="cart-total">
                                    <td>TOTAL</td>
                                    <td>$20.00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkout-step-three">
            <div class="pay-main">
                <h2 class="checkout-tit">03 / Payment information</h2>
                <div class="row-check-out">
                    <div class="card-list">
                        <span>Credit card (PayPal)</span>
                        <img src="{{url('assets-frontend')}}/images/card-list.png" alt="credit card"
                            class="img-responsive">
                    </div>
                    <p class="check-out-desc">Pay with your credit card via PayPal Website payments Pro.</p>
                    <div class="form-checkout">
                        <form id="form-contact">
                            <div class="row">
                                <div class="row-inf">
                                    <div class="call-number">
                                        <input type="text" name="call_number" class="form-control"
                                            placeholder="Card Number">
                                    </div>
                                    <div class="expiry">
                                        <input type="date" name="expiry" class="form-control"
                                            data-placeholder="Expiry (MM/YY)">
                                    </div>
                                    <div class="card-code">
                                        <input type="text" name="card_code" class="form-control"
                                            placeholder="Card Code">
                                    </div>
                                </div>
                                <div class="oder-now">
                                    <input type="submit" value="PLACE ORDER">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
