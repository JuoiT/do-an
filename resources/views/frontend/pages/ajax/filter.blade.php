{{-- show list products --}}
@foreach ($products as $product)
    <div class="col-sm-4 col-xs-12 wow fadeInUp item">
        <div class="wrapper">
            <div class="pro-img">
                <a href="{{ route('detail') }}">
                    <img style="height: 200px;" class="img-responsive"
                        src="{{ url('upload-images') . '/' . $product->image }}" />
                </a>
            </div>
            <div class="contain-wrapper">
                <div class="tit pt-2">
                    <a href="{{ route('detail') }}">{{ $product->name }}</a>
                </div>
                <div class="ratting">
                    <ul>
                        <li>
                            <a href="#">
                                <img class="img-responsive" src="{{ url('assets-frontend') }}/images/green-star-2.png">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="img-responsive" src="{{ url('assets-frontend') }}/images/green-star-2.png">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="img-responsive" src="{{ url('assets-frontend') }}/images/green-star-2.png">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="img-responsive" src="{{ url('assets-frontend') }}/images/dark-star-2.png">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="img-responsive" src="{{ url('assets-frontend') }}/images/dark-star-2.png">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="price">
                    @if ($product->sale_price > 0)
                        <div class="new-price">{{ $product->sale_price }}</div>
                        <div class="old-price">
                            <del>{{ $product->price }}đ</del>
                        </div>
                    @else
                        <div class="new-price">{{ $product->price }}đ</div>
                    @endif
                </div>
                <div class="btn-part">
                    <a href="{{ route('cart.add') }}" class="cart-btn">Mua ngay</a>
                    <i class="icon-shopping-basket"></i>
                </div>
                <div class="btn-part">
                    <a href="{{ route('whishlist') }}" class="cart-btn">Yêu thích</a>
                    <i class="icon-heart-empty"></i>
                </div>
            </div>
            <div class="sale">sale</div>
        </div>
    </div>
@endforeach
{{-- end show list products --}}