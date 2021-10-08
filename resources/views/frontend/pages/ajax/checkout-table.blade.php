<h2 class="checkout-head">Your Order</h2>
<div class="checkout-order-table text-left">
    <table class="table-responsive">
        <thead>
            <tr class="th-head">
                <th scope="col" width="68%">PRODUCT</th>
                <th scope="col" width="42%">MONEY</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ toUsd($item['quantity'] * $item['price']) }}</td>
                </tr>
            @endforeach
        </tbody>

        <tfoot>
            <tr class="cart-subtotal">
                <td>SUB TOTAL</td>
                <td>{{ toUsd($totalPrice) }}</td>
            </tr>

            <tr class="cart-shopping">
                <td>SHIPPING</td>
                @if (!is_null($newShip))
                    <td><del>{{ toUsd($shipDefault->price) }}</del><strong>
                            {{ toUsd($newShip) }}</strong>
                    </td>
                @else
                    <td>{{ toUsd($shipDefault->price) }}</td>
                @endif
            </tr>
            <tr class="cart-total">
                <td>TOTAL</td>
                @if ($newTotalPrice)
                    <td><del>{{ toUsd($totalPrice + $shipDefault->price) }}</del><strong>
                            {{ toUsd($newTotalPrice) }}</strong>
                    </td>
                @else
                    <td>{{ toUsd($totalPrice + $shipDefault->price) }}</td>
                @endif
            </tr>
        </tfoot>
    </table>
</div>

<div class="p-5" style="float: left; width: 100% !important;">

    @if ($couponActive)
        <div class="bg-success" style="width: 100% !important;">
            <h4 style="display: block !important; padding: 20px;">
                <strong>Actived coupon: {{ $couponActive->name }}</strong>
                {{ $couponActive->description }}
            </h4>
        </div>
    @endif
    @if ($invalidCouponMessage)
        <div class="bg-danger" style="width: 100% !important;">
            <h4 style="display: block !important;">

            </h4>
            <h4 style="display: block !important; padding: 20px; ">
                <strong>Invalid Coupon:</strong> {{ $invalidCouponMessage }}
                <br>
                @if ($couponFound)
                    <strong>Found coupon:</strong>  {{ $couponFound->name }} {{ $couponFound->description }}
                @endif
            </h4>
        </div>
    @endif
</div>

<input type="hidden" name="coupon_id" value="{{ $couponActive ? $couponActive->id : '' }}">
