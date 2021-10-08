@extends('backend.master')

@section('main')

    @if (Session::get('success'))
        <div class="alert alert-success">
            <strong
                class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-green-teal gradient-shadow">{{ Session::get('success') }}</strong>
        </div>
    @endif

    @if (Session::get('error'))
        <div class="alert alert-danger">
            <strong
                class="waves-effect waves-light mt-1 ml-1 btn gradient-45deg-deep-orange-orange gradient-shadow">{{ Session::get('error') }}</strong>
        </div>
    @endif

    <section class="invoice-view-wrapper section">
        <div class="row">
            <div class="col m12 s12">
                <div class="card">
                    <div class="card-content invoice-print-area">
                        <div class="row invoice-date-number">
                            <div class="col xl7 s12">
                                <span class="invoice-number mr-1">Invoice#</span>
                                <span>{{ $customer->id }}</span>
                            </div>
                            <div class="col xl5 s12">
                                <div class="invoice-date display-flex align-items-center flex-wrap">
                                    <div class="mr-3">
                                        <small>Date Issue:</small>
                                        <span>{{ $customer->created_at }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3 invoice-logo-title">
                            <div class="col m6 s12 display-flex invoice-logo mt-1 push-m6"></div>
                            <div class="col m6 s12 pull-m6">
                                <h4 class="indigo-text">Invoice</h4>
                            </div>
                        </div>
                        <div class="divider mb-3 mt-3"></div>

                        <div class="row invoice-info">
                            <div class="col m6 s12">
                                <h6 class="invoice-from">Bill From</h6>
                                <div class="invoice-address">
                                    <span>Organic Foodstore</span>
                                </div>
                                <div class="invoice-address">
                                    <span>Hanoi</span>
                                </div>
                                <div class="invoice-address">
                                    <span>kemkiuu@gmail.com</span>
                                </div>
                                <div class="invoice-address">
                                    <span>0866024929</span>
                                </div>
                            </div>
                            <div class="col m6 s12">
                                <div class="divider show-on-small hide-on-med-and-up mb-3"></div>
                                <h6 class="invoice-to">Bill To</h6>
                                <div class="invoice-address">
                                    <span>{{ $customer->user->name }}</span>
                                </div>
                                <div class="invoice-address">
                                    <span>{{ $customer->address }}</span>
                                </div>
                                <div class="invoice-address">
                                    <span>{{ $customer->user->email }}</span>
                                </div>
                                <div class="invoice-address">
                                    <span>{{ $customer->phone }}</span>
                                </div>
                                <p><strong style="font-weight: 1000; font-size: 17px">Coupon</strong>: 
                                    @if ($coupon)
                                        <span>{{$coupon->name}} {{$coupon->description}}</span>
                                    @endif
                                </p>
                                <p><strong style="font-weight: 1000; font-size: 17px">Payment</strong>: 
                                    @if ($coupon)
                                        <span>{{$payment->name}}</span>
                                    @endif
                                </p>
                                <p><strong style="font-weight: 1000; font-size: 17px">Ship</strong>: 
                                    @if ($ship)
                                        <span>{{$ship->name}}</span>
                                    @endif
                                </p>
                                <p><strong style="font-weight: 1000; font-size: 17px">Description</strong>: 
                                    @if ($ship)
                                        <span>{{$customer->description}}</span>
                                    @endif
                                </p>
                            </div>

                        </div>

                        <div class="divider mb-3 mt-3"></div>
                        <div class="row invoice-info">
                            <form action="{{ route('order.update', $customer->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="col m6 s12">
                                    <select name="status">
                                        @if ($customer->status < 1)
                                            <option value="0" {{ $customer->status == 0 ? 'selected' : '' }}>Confirming
                                            </option>
                                        @endif
                                        @if ($customer->status < 2)
                                            <option value="1" {{ $customer->status == 1 ? 'selected' : '' }}>Taking order
                                            </option>
                                        @endif
                                        @if ($customer->status < 3)
                                            <option value="2" {{ $customer->status == 2 ? 'selected' : '' }}>Delivery
                                            </option>
                                        @endif
                                        @if ($customer->status < 4)
                                            <option value="3" {{ $customer->status == 3 ? 'selected' : '' }}>Done
                                            </option>
                                        @endif
                                        @if ($customer->status != 3)
                                            <option value="4" {{ $customer->status == 4 ? 'selected' : '' }}>Cancel
                                            </option>
                                        @endif
                                    </select>
                                </div>
                                <div class="col m6 s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button
                                                class="btn waves-effect waves-light gradient-45deg-green-teal gradient-shadow right"
                                                type="submit">Submit
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="divider mb-3 mt-3"></div>
                        <div class="invoice-product-details">
                            <table class="striped responsive-table">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Image</th>
                                        <th>Quantity</th>
                                        <th class="right-align">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detail as $value)
                                        <tr>
                                            <td>{{ $value->product->name }}</td>
                                            <td><img style="width: 150px;"
                                                    src="{{ url('upload-product') }}/{{ $value->product->image }}"
                                                    alt="">
                                            </td>
                                            <td>{{ $value->quantity }}</td>
                                            <td class="indigo-text right-align">{{ number_format($value->price) }} đ</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="divider mt-3 mb-3"></div>
                        <div class="invoice-subtotal">
                            <div class="row">
                                <div class="col m5 s12">
                                    <p>Thanks for your business.</p>
                                </div>
                                <div class="col xl4 m7 s12 offset-xl3">
                                    <ul>
                                        <li class="display-flex justify-content-between">
                                            <span class="invoice-subtotal-title">Subtotal</span>
                                            <h6 class="invoice-subtotal-value">
                                                {{ number_format($customer->total_price) }}
                                                đ</h6>
                                        </li>
                                        <!-- <li class="display-flex justify-content-between">
                                                    <span class="invoice-subtotal-title">Discount</span>
                                                    <h6 class="invoice-subtotal-value">- $ 09.60</h6>
                                                </li>
                                                <li class="display-flex justify-content-between">
                                                    <span class="invoice-subtotal-title">Tax</span>
                                                    <h6 class="invoice-subtotal-value">21%</h6>
                                                </li>
                                                <li class="divider mt-2 mb-2"></li>
                                                <li class="display-flex justify-content-between">
                                                    <span class="invoice-subtotal-title">Invoice Total</span>
                                                    <h6 class="invoice-subtotal-value">$ 61.40</h6>
                                                </li>
                                                <li class="display-flex justify-content-between">
                                                    <span class="invoice-subtotal-title">Paid to date</span>
                                                    <h6 class="invoice-subtotal-value">- $ 00.00</h6>
                                                </li>
                                                <li class="display-flex justify-content-between">
                                                    <span class="invoice-subtotal-title">Balance (USD)</span>
                                                    <h6 class="invoice-subtotal-value">$ 10,953</h6>
                                                </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col xl3 m4 s12">
                        <div class="card invoice-action-wrapper">
                            <div class="card-content">
                                <div class="invoice-action-btn">
                                    <a href="#"
                                        class="btn indigo waves-effect waves-light display-flex align-items-center justify-content-center">
                                        <i class="material-icons mr-4">check</i>
                                        <span class="text-nowrap">Send Invoice</span>
                                    </a>
                                </div>
                                <div class="invoice-action-btn">
                                    <a href="#" class="btn-block btn btn-light-indigo waves-effect waves-light invoice-print">
                                        <span>Print</span>
                                    </a>
                                </div>
                                <div class="invoice-action-btn">
                                    <a href="app-invoice-edit.html" class="btn-block btn btn-light-indigo waves-effect waves-light">
                                        <span>Edit Invoice</span>
                                    </a>
                                </div>
                                <div class="invoice-action-btn">
                                    <a href="#"
                                        class="btn waves-effect waves-light display-flex align-items-center justify-content-center">
                                        <i class="material-icons mr-3">attach_money</i>
                                        <span class="text-nowrap">Add Payment</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
        </div>
    </section>

@stop
