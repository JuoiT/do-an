@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/shopping_cart.css">

<!-- Back To Top -->
<div class="back-top">
    <i class="fal fa-chevron-up"></i>
</div>

<!-- Banner -->
<div class="banner">
    <img src="{{url('assets-frontend')}}/images/cart-page-banner.jpg" alt="">
</div>

<!-- Table-main -->
<div class="table-main">
    <div class="table-main-container">
        <!-- Page Container -->
        <div class="container-main">
            <ul class="list-page">
                <li><a href="home.html">Home</a></li>
                <li>Shoping Cart</li>
            </ul>
            <h1 class="title">Shoping Cart</h1>
        </div>

        <!-- Table Container -->
        <div class="container-table">
            <div class="table-product">
                <table>
                    <thead>
                        <tr>
                            <th class="product">PRODUCT</th>
                            <th class="name">Name &amp; Description</th>
                            <th class="price">Price</th>
                            <th class="quantity">Quantity</th>
                            <th class="total">Total</th>
                            <th class="cancle">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sản phẩm 1 -->
                        <tr>
                            <td class="product-img"><a href="#"><img class="cart-image"
                                        src="{{url('assets-frontend')}}/images/deal-img-4.jpg" alt=""></a>
                            </td>
                            <td class="product-tit"><a href="#">Strawberries, 16 oz</a></td>
                            <td class="price"><span class="money">$2.50 / ea</span></td>
                            <td>
                                <div class="amount">
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                            </td>
                            <td class="price">$2.50 </td>
                            <td class="del"><i class="far fa-times"></i></td>
                        </tr>
                        <!-- Sản phẩm 2 -->
                        <tr>
                            <td class="product-img"><a href="#"><img class="cart-image"
                                        src="{{url('assets-frontend')}}/images/deal-img-6.jpg" alt=""></a></td>
                            <td class="product-tit"><a href="#">Broccoli, bunch</a></td>
                            <td class="price"><span class="money">$2.29 / bunch</span></td>
                            <td>
                                <div class="amount">
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                            </td>
                            <td class="price">$4.00 </td>
                            <td class="del"><i class="far fa-times"></i></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="l-part">
                                    <a class="shopping-btn" href="#">Continue with Shopping<i
                                            class="far fa-arrow-right"></i></a>
                                </div>
                                <div class="r-part">
                                    <a class="clear-cart-btn" href="#"><i class="far fa-times"></i>clear cart</a>
                                    <a class="update-cart-btn" href="#"><i class="far fa-sync-alt"></i>update
                                        cart</a>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="caupon">
                <label>Coupon Code</label>
                <input class="caupon_text" type="text" name="ctext">
                <button class="caupon-btn">Apply Now</button>
            </div>
            <div class="inf">
                <!-- Item Left -->
                <div class="shopping-tax">
                    <div class="tax-box">
                        <div class="tit">Estimate Shipping and Tax</div>
                        <div class="box-inner">
                            <p>Enter your destination to get a shipping estimate.</p>

                            <label>country<sup>*</sup></label>
                            <select>
                                <option>United States</option>
                                <option>United States</option>
                                <option>United States</option>
                                <option>United States</option>
                                <option>United States</option>
                            </select>

                            <label>State/Province</label>
                            <select>
                                <option>Please select region, state or province</option>
                                <option>Please select region, state or province</option>
                                <option>Please select region, state or province</option>
                                <option>Please select region, state or province</option>
                                <option>Please select region, state or province</option>
                            </select>
                            <label>Zip/Postal Code</label>
                            <input class="postal-text" type="text">
                            <button class="write"><i class="fad fa-clipboard"></i>Get a Quote</button>
                        </div>
                    </div>
                </div>
                <div class="cart-total">
                    <div class="total-box">
                        <div class="tit">Shopping Cart Total</div>
                        <div class="total-box-inner">
                            <div class="sub-total"><span>subtotal</span><span class="price">$129.00</span></div>
                            <div class="grand-total"><span>Grand Total </span><span class="price">$129.00</span>
                            </div>
                            <a class="checkout-btn" href="#"><i class="far fa-check"></i>Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item Right -->

        </div>
    </div>
</div>
</div>

@stop
