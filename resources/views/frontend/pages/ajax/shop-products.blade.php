@if (count($products) > 0)
    {{-- show list products --}}
    <div id="products" class="product-list list-group">
        @foreach ($products as $product)
            <div class="col-sm-4 col-xs-12 wow fadeInUp item">
                <div class="wrapper">
                    <div class="pro-img">
                        <a href="{{ route('detail', $product->id) }}">
                            <img style="height: 200px;" class="img-responsive"
                                src="{{ url('upload-images') . '/' . $product->image }}" />
                        </a>
                    </div>
                    <div class="contain-wrapper">
                        <div class="tit pt-2">
                            <a href="{{ route('detail', $product->id) }}">{{ $product->name }}</a>
                        </div>
                        <div class="ratting">
                            <ul>
                                @for ($i = 0; $i < (floor($product->comments->avg('rating'))); $i++)
                                <li>
                                    <img class="img-responsive" src="{{ url('assets-frontend') }}/images/green-star-2.png">
                                </li>
                                @endfor
                                @for ($i = 5; $i > (floor($product->comments->avg('rating'))); $i--)
                                <li>
                                    <img class="img-responsive" src="{{ url('assets-frontend') }}/images/dark-star-2.png">
                                </li>
                                @endfor
                            </ul>
                        </div>
                        <div class="price">
                            @if ($product->sale_price > 0)
                                <div class="new-price">{{ toUsd($product->sale_price) }}</div>
                                <div class="old-price">
                                    <del>{{ toUsd($product->price) }}</del>
                                </div>
                            @else
                                <div class="new-price">{{ toUsd($product->price) }}</div>
                            @endif
                        </div>
                        <div class="btn-part">
                            <form action="{{route('cart.add')}}" method="GET">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="quantity" value="1">
                                <div class="cart">
                                    <button type="submit" class="cart-btn">Buy now</button>
                                </div>
                            </form>
                            <i class="icon-shopping-basket"></i>
                        </div>
                        <div class="btn-part">
                            <form action="{{route('whishlist.add')}}" method="GET">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="cart">
                                    <button type="submit" class="cart-btn">Whishlist</button>
                                </div>
                            </form>
                            <i class="icon-heart-empty"></i>
                        </div>
                    </div>
                    @if ($product->sale_price > 0)
                        <div class="sale">sale</div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    {{-- end show list products --}}

    {{-- pagination --}}
    <div class="navigation">
        <ul class="pagination " id="pagination">
            @if ($page != 1)
                <li onClick="filter({{ $page - 1 }})" class="previous" aria-controls="" id="p-previous">
                    <button style="outline: none" class="btn"><i class="fa fa-angle-left"
                            aria-hidden="true"></i></button></li>
            @endif
            @if ($totalPage > 1)
                @for ($i = 1; $i <= $totalPage; $i++)
                    <li onClick="filter({{ $i }})" class="p-page" aria-controls="">
                        <button style="outline: none; width: 35px"
                            class="btn choose-page {{ $i == $page ? 'bg-success' : '' }}">{{ $i }}</button>
                    </li>
                @endfor
            @endif
            @if ($page != $totalPage)
                <li onClick="filter({{ $page + 1 }})" class="next" aria-controls="" id="p-next">
                    <button style="outline: none" class="btn">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </button>
                </li>
            @endif
        </ul>
    </div>
    {{-- end pagination --}}

@else
    <div class="text-center">
        <span>Không tìm thấy sản phẩm nào</span>
    </div>
@endif
