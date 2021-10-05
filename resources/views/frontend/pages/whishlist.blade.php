@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/page/whishlist.css">
<link rel="stylesheet" href="{{url('assets-frontend')}}/css/page/product.css">

<section class="sub-banner wow fadeInUp">
    <img class="banner" src="{{url('assets-frontend')}}/images/cart-page-banner.jpg">
</section>
<section class="breadcrumb-section wow fadeInUp">
    <div class="container">
        <div class="breadcrumb">
            <ul class="list-inline">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>Whishlist</li>
            </ul>
            <h1 class="page-tit">Whishlist</h1>
        </div>
    </div>
</section>

<div class="content-part whishlist-page">
    <div class="container">
        @if (count($favs) > 0)
        {{-- show list favs --}}
        <div id="favs" class="product-list list-group row">
            @foreach ($favs as $product)
                <div class="col-md-3 col-sm-4 col-xs-12 wow fadeInUp item">
                    <div class="wrapper">
                        <div class="pro-img">
                            <a href="{{ route('detail', $product->product->id) }}">
                                <img style="height: 200px;" class="img-responsive"
                                    src="{{ url('upload-images') . '/' . $product->product->image }}" />
                            </a>
                        </div>
                        <div class="contain-wrapper">
                            <div class="tit pt-2">
                                <a href="{{ route('detail', $product->product->id) }}">{{ $product->product->name }}</a>
                            </div>
                            <div class="ratting">
                                <ul>
                                    @for ($i = 0; $i < (floor($product->product->comments->avg('rating'))); $i++)
                                        <li>
                                            <img class="img-responsive"
                                                src="{{ url('assets-frontend') }}/images/green-star-2.png">
                                        </li>
            @endfor
            @for ($i = 5; $i > (floor($product->product->comments->avg('rating'))); $i--)
            <li>
                <img class="img-responsive" src="{{ url('assets-frontend') }}/images/dark-star-2.png">
            </li>
    @endfor
    </ul>
    </div>
    <div class="price">
        @if ($product->product->sale_price > 0)
            <div class="new-price">{{ toUsd($product->product->sale_price) }}</div>
            <div class="old-price">
                <del>{{ toUsd($product->product->price) }}</del>
            </div>
        @else
            <div class="new-price">{{ toUsd($product->product->price) }}</div>
        @endif
    </div>
    <div class="btn-part">
        <form action="{{ route('cart.add') }}" method="GET">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->product->id }}">
            <input type="hidden" name="quantity" value="1">
            <div class="cart">
                <button type="submit" class="cart-btn">Buy now</button>
            </div>
        </form>
        <i class="icon-shopping-basket"></i>
    </div>
    @if (isFavorited($product->product->id))
        <div class="btn-part">
            <form action="{{ route('whishlist.remove') }}" method="GET">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->product->id }}">
                <div class="cart">
                    <button type="submit" class="cart-btn">Whishlist</button>
                </div>
            </form>
            <i style="color: red" class="icon-heart"></i>
        </div>
    @else
        <div class="btn-part">
            <form action="{{ route('whishlist.add') }}" method="GET">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->product->id }}">
                <div class="cart">
                    <button type="submit" class="cart-btn">Whishlist</button>
                </div>
            </form>
            <i class="icon-heart"></i>
        </div>
    @endif
    </div>
    @if ($product->product->sale_price > 0)
        <div class="sale">sale</div>
    @endif
    </div>
    </div>
    @endforeach
    </div>
    {{-- end show list products --}}
    
    {{-- pagination --}}
    {{ $favs->links() }}
    {{-- end pagination --}}
    
    @else
    <div class="text-center">
        <span>Không tìm thấy sản phẩm nào</span>
    </div>
    @endif
    
    </div>
</div>

@stop
@section('script')
<script src="{{url('assets-frontend')}}/js/whishlist.js"></script>
<script src="{{url('assets-frontend')}}/js/jquery.event.move.js"></script>
@endsection
