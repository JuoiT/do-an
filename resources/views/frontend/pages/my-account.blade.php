@extends('frontend.master')

@section('main')

    <link href="{{ url('assets-frontend') }}/css/page/my_account.css" rel="stylesheet" />
    <link href="{{ url('assets-frontend') }}/css/library/fontello-1.css" rel="stylesheet" />

    <section class="fress-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 lpart wow slideInLeft">
                    <div class="bg equal-height ">
                        <div class="my-account">
                            <div class="avatar">
                                <a href="#">
                                    @if (Auth::user())
                                        <img src="{{ url('upload-avatars') }}/{{ Auth::user()->avatar }}" alt="">
                                    @endif
                                </a>
                            </div>
                            <div class="content">
                                <div class="name-info">
                                    @if (Auth::user())
                                        <p>{{ Auth::user()->name }}</p>
                                    @endif
                                </div>
                                <!-- <div class="edit-info">
                                                                                        <a href="">
                                                                                            <i class="icon-pencil"></i>Edit Profile
                                                                                        </a>
                                                                                    </div> -->
                            </div>
                        </div>
                        <div class="sidebar-acc">
                            <ul id="myBtnContainer" class="sidebar">
                                <li>
                                    <button class="btn" onclick="filterSelection('my_account')">
                                        <i class="icon-user-o"></i>My account
                                    </button>
                                </li>
                                <li>
                                    <button class="btn active" onclick="filterSelection('order')">
                                        <i class="icon-doc-text"></i>Order
                                    </button>
                                </li>
                                <!-- <li>
                                                                                        <button class="btn" onclick="filterSelection('notification')">
                                                                                            <i class="icon-bell"></i>Notification
                                                                                        </button>
                                                                                    </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 rpart wow slideInRight">
                    <div class="bg equal-height">
                        <div class="filterDiv my_account">
                            <div class="content">
                                <p>My account</p>
                            </div>
                            <div class="info">
                                <div class="my-info">

                                    <form class="account-form" method="POST" action="{{ route('update_user') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}" />

                                        <input type="text" name="name" class="form-control required" placeholder="Your Name"
                                            required="required" value="{{ Auth::user()->name }}" />
                                        <span class="asterisk_input"></span>

                                        <input type="hidden" name="email" class="form-control required"
                                            placeholder="Your Email" required="required"
                                            value="{{ Auth::user()->email }}" />
                                        <span class="asterisk_input"></span>

                                        <input type="text" name="phone" class="form-control required"
                                            placeholder="Your Phone Number" required="required"
                                            value="{{ Auth::user()->phone }}" />
                                        <span class="asterisk_input"></span>

                                        <input type="text" name="address" class="form-control required"
                                            placeholder="Your Address" required="required"
                                            value="{{ Auth::user()->address }}" />
                                        <span class="asterisk_input"></span>

                                        <input type="password" name="password" class="form-control required"
                                            placeholder="Password" required="required" value="" />
                                        <span class="asterisk_input"></span>

                                        <button type="submit">SAVE</button>
                                    </form>

                                </div>
                                <div class="my-avatar">
                                    <div class="avatar">
                                        <div class="avatar-img">
                                            <img src="{{ url('upload-avatars') }}/{{ Auth::user()->avatar }}" alt="">
                                        </div>
                                        <div class="edit-avatar">
                                            <form action="{{ route('update_user') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ Auth::user()->id }}" />

                                                <input type="file" name="avatar" id="avatar" class="inputfile" />
                                                <label for="avatar">Choose a file</label>

                                                <button type="submit">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filterDiv order">
                            <ul id="myBtnOrder" class="sidebar">
                                <li>
                                    <button class="btn" onclick="selection('all')">All</button>
                                </li>
                                <li>
                                    <button class="btn active" onclick="selection('confirmation')">Confirmation</button>
                                </li>
                                <li>
                                    <button class="btn" onclick="selection('waiting')">Waiting</button>
                                </li>
                                <li>
                                    <button class="btn" onclick="selection('delivering')">Delivering</button>
                                </li>
                                <li>
                                    <button class="btn" onclick="selection('delivered')">Delivered</button>
                                </li>
                                <li>
                                    <button class="btn" onclick="selection('cancelled')">Cancelled</button>
                                </li>
                            </ul>
                            <ul class="value">
                                <!-- <li class="no_order">Chưa có đơn hàng nào!</li> -->
                                <div class="filterLi confirmation">
                                    @if ($confirmingOrders)
                                        @foreach ($confirmingOrders as $item)
                                            <div class="list_order">
                                                <div class="header">
                                                    <p>confirmation</p>
                                                </div>
                                                <div class="body row" style="text-align: left !important">
                                                    <div class="col-sm-6 col">
                                                        @foreach ($item->orderDetails as $detail)
                                                            <p>{{ $detail->product->name }} x{{ $detail->quantity }} =
                                                                {{ toUsd($detail->price * $detail->quantity) }}</p>
                                                        @endforeach
                                                    </div>
                                                    <div class="col-sm-6 col">
                                                        <p>Payment: <span>{{ $item->payment->name }}</span></p>
                                                        <p>Ship: <span>{{ $item->ship->name }}</span></p>
                                                        <p>Coupon: <span>{{ $item->coupon->name }}
                                                                {{ $item->coupon->description }}</span></p>
                                                        <p>Name: <span>{{ $item->name }}</p>
                                                        <p>Phone: <span>{{ $item->phone }}</p>
                                                        <p>Address: <span>{{ $item->address }}</p>
                                                        <p>Email: <span>{{ $item->email }}</p>
                                                    </div>
                                                </div>
                                                <div class="footer">
                                                    <div class="total_price">
                                                        <p class="total">Total price:</p>
                                                        <p class="price">{{ toUsd($item->total_price) }}</p>
                                                    </div>
                                                    <!-- <div class="repurchase">
                                                                                                        <button type="submit">Repurchase</button>
                                                                                                    </div> -->
                                                    <div class="cancel">
                                                        <a class="btn btn-danger" href="{{route('order.cancel', 
                                                        $item->id)}}">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <h3>Nothing here!</h3>
                                    @endif
                                </div>
                                <div class="filterLi waiting">
                                    @if ($watingOrders)
                                        @foreach ($watingOrders as $item)
                                            <div class="list_order">
                                                <div class="header">
                                                    <p>waiting</p>
                                                </div>
                                                <div class="body row" style="text-align: left !important">
                                                    <div class="col-sm-6 col">
                                                        @foreach ($item->orderDetails as $detail)
                                                            <p>{{ $detail->product->name }} x{{ $detail->quantity }} =
                                                                {{ toUsd($detail->price * $detail->quantity) }}</p>
                                                        @endforeach
                                                    </div>
                                                    <div class="col-sm-6 col">
                                                        <p>Payment: <span>{{ $item->payment->name }}</span></p>
                                                        <p>Ship: <span>{{ $item->ship->name }}</span></p>
                                                        <p>Coupon: <span>{{ $item->coupon->name }}
                                                                {{ $item->coupon->description }}</span></p>
                                                        <p>Name: <span>{{ $item->name }}</p>
                                                        <p>Phone: <span>{{ $item->phone }}</p>
                                                        <p>Address: <span>{{ $item->address }}</p>
                                                        <p>Email: <span>{{ $item->email }}</p>
                                                    </div>
                                                </div>
                                                <div class="footer">
                                                    <div class="total_price">
                                                        <p class="total">Total price:</p>
                                                        <p class="price">{{ toUsd($item->total_price) }}</p>
                                                    </div>
                                                    <!-- <div class="repurchase">
                                                                                                        <button type="submit">Repurchase</button>
                                                                                                    </div> -->
                                                    <div class="cancel">
                                                        <a class="btn btn-danger" href="{{route('order.cancel', 
                                                        $item->id)}}">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <h3>Nothing here!</h3>
                                    @endif
                                </div>
                                <div class="filterLi delivering">
                                    @if ($deliveringOrders)
                                        @foreach ($deliveringOrders as $item)
                                            <div class="list_order">
                                                <div class="header">
                                                    <p>delivering</p>
                                                </div>
                                                <div class="body row" style="text-align: left !important">
                                                    <div class="col-sm-6 col">
                                                        @foreach ($item->orderDetails as $detail)
                                                            <p>{{ $detail->product->name }} x{{ $detail->quantity }} =
                                                                {{ toUsd($detail->price * $detail->quantity) }}</p>
                                                        @endforeach
                                                    </div>
                                                    <div class="col-sm-6 col">
                                                        <p>Payment: <span>{{ $item->payment->name }}</span></p>
                                                        <p>Ship: <span>{{ $item->ship->name }}</span></p>
                                                        <p>Coupon: <span>{{ $item->coupon->name }}
                                                                {{ $item->coupon->description }}</span></p>
                                                        <p>Name: <span>{{ $item->name }}</p>
                                                        <p>Phone: <span>{{ $item->phone }}</p>
                                                        <p>Address: <span>{{ $item->address }}</p>
                                                        <p>Email: <span>{{ $item->email }}</p>
                                                    </div>
                                                </div>
                                                <div class="footer">
                                                    <div class="total_price">
                                                        <p class="total">Total price:</p>
                                                        <p class="price">{{ toUsd($item->total_price) }}</p>
                                                    </div>
                                                    <!-- <div class="repurchase">
                                                                                                        <button type="submit">Repurchase</button>
                                                                                                    </div> -->
                                                    <div class="cancel">
                                                        <a class="btn btn-danger" href="{{route('order.cancel', 
                                                        $item->id)}}">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <h3>Nothing here!</h3>
                                    @endif
                                </div>
                                <div class="filterLi delivered">
                                    @if ($deliveredOrders)
                                        @foreach ($deliveredOrders as $item)
                                            <div class="list_order">
                                                <div class="header">
                                                    <p>delivered</p>
                                                </div>
                                                <div class="body row" style="text-align: left !important">
                                                    <div class="col-sm-6 col">
                                                        @foreach ($item->orderDetails as $detail)
                                                            <p>{{ $detail->product->name }} x{{ $detail->quantity }} =
                                                                {{ toUsd($detail->price * $detail->quantity) }}</p>
                                                        @endforeach
                                                    </div>
                                                    <div class="col-sm-6 col">
                                                        <p>Payment: <span>{{ $item->payment->name }}</span></p>
                                                        <p>Ship: <span>{{ $item->ship->name }}</span></p>
                                                        <p>Coupon: <span>{{ $item->coupon->name }}
                                                                {{ $item->coupon->description }}</span></p>
                                                        <p>Name: <span>{{ $item->name }}</p>
                                                        <p>Phone: <span>{{ $item->phone }}</p>
                                                        <p>Address: <span>{{ $item->address }}</p>
                                                        <p>Email: <span>{{ $item->email }}</p>
                                                    </div>
                                                </div>
                                                <div class="footer">
                                                    <div class="total_price">
                                                        <p class="total">Total price:</p>
                                                        <p class="price">{{ toUsd($item->total_price) }}</p>
                                                    </div>
                                                    <!-- <div class="repurchase">
                                                                                                        <button type="submit">Repurchase</button>
                                                                                                    </div> -->
                                                    <div class="cancel">
                                                        <a class="btn btn-danger" href="{{route('order.cancel', 
                                                        $item->id)}}">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <h3>Nothing here!</h3>
                                    @endif
                                </div>
                                <div class="filterLi cancelled">
                                    @if ($cancelledOrders)
                                        @foreach ($cancelledOrders as $item)
                                            <div class="list_order">
                                                <div class="header">
                                                    <p>cancelled</p>
                                                </div>
                                                <div class="body row" style="text-align: left !important">
                                                    <div class="col-sm-6 col">
                                                        @foreach ($item->orderDetails as $detail)
                                                            <p>{{ $detail->product->name }} x{{ $detail->quantity }} =
                                                                {{ toUsd($detail->price * $detail->quantity) }}</p>
                                                        @endforeach
                                                    </div>
                                                    <div class="col-sm-6 col">
                                                        <p>Payment: <span>{{ $item->payment->name }}</span></p>
                                                        <p>Ship: <span>{{ $item->ship->name }}</span></p>
                                                        <p>Coupon: <span>{{ $item->coupon->name }}
                                                                {{ $item->coupon->description }}</span></p>
                                                        <p>Name: <span>{{ $item->name }}</p>
                                                        <p>Phone: <span>{{ $item->phone }}</p>
                                                        <p>Address: <span>{{ $item->address }}</p>
                                                        <p>Email: <span>{{ $item->email }}</p>
                                                    </div>
                                                </div>
                                                <div class="footer">
                                                    <div class="total_price">
                                                        <p class="total">Total price:</p>
                                                        <p class="price">{{ toUsd($item->total_price) }}</p>
                                                    </div>
                                                    <!-- <div class="repurchase">
                                                                                                        <button type="submit">Repurchase</button>
                                                                                                    </div> -->
                                                    <div class="cancel">
                                                        <a class="btn btn-danger" href="{{route('order.cancel', 
                                                        $item->id)}}">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <h3>Nothing here!</h3>
                                    @endif
                                </div>
                            </ul>
                        </div>
                        <!-- <div class="filterDiv notification">c</div> -->
                    </div>
                </div>
            </div>
    </section>
    <div class="clearfix"></div>

@stop

@section('script')
    <script src="{{ url('assets-frontend') }}/js/responsive-slider.js"></script>
    <script src="{{ url('assets-frontend') }}/js/jquery.event.move.js"></script>
    <script src="{{ url('assets-frontend') }}/js/my_account.js"></script>

@stop
