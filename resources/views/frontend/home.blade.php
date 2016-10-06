@extends('frontend')
@section('title')
    Canhgiamgia.com | Khuyến mại hot nhất từ lazada, tiki, adayroi, ...
@endsection
@section('facebook_meta')
    <meta property="og:url" content="http://canhgiamgia.com">
    <meta property="og:image" content="{{public_path('coupon/logo.png')}}">
    <meta property="og:title" content="Canhgiamgia.com | Khuyến mại hot nhất từ lazada, tiki, adayroi, ...">
@section('content')
<div class="container">
    <div class="row">
        <h1 class="mb20" style="text-align: center;">Ưu đãi hấp dẫn từ hơn 20 nhà phân phối và hàng trăm khuyến mãi</h1>
        <div class="owl-carousel" id="owl-carousel" data-items="6">
            @foreach($providers as $provider)
            <div>
                <a href="{{url('khuyen-mai/nha-phan-phoi', ['slug'=> str_slug($provider->name),'id'=>$provider->id]) }}">
                <div class="product-thumb" style="height: 230px">
                    <header class="product-header" style="background-image: {{$provider->image_preview}}">
                        <img src="{{$provider->image_preview}}" alt="{{$provider->name}}" title="{{$provider->name}}"/>
                    </header>
                    <div class="product-inner">
                        <h5 class="product-title">{{$provider->name}}</h5>
                        {{--<p class="product-desciption">Himenaeos molestie porta curae nec taciti sem blandit</p>--}}
                        {{--<ul class="product-actions-list">--}}
                            {{--<li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
                </a>
            </div>
            @endforeach

        </div>

    <h1 class="mb20">Khuyến mãi mới <small><a href="{{url('khuyen-mai')}}">Xem tất cả</a></small></h1>
    <div class="row row-wrap">

        @foreach ($latestDeals as $deal)



            <a class="product-thumb product-thumb-horizontal" href="{{url('khuyen-mai', ['id'=>$deal->id])}}">
                <header class="product-header">
                    <img src="{{$deal->image_preview}}" alt="{{$deal->name}}" title="{{$deal->name}}" />
                </header>
                <div class="product-inner">
                    <h5 class="product-title">{{$deal->name}}</h5>
                    <div class="product-desciption">{!! \Illuminate\Support\Str::limit($deal->description, 80, ' ...') !!}</div>
                    <div class="product-meta" style="width: 30%"><span class="product-time"><i class="fa fa-clock-o"></i>

                            @if(!empty($deal->valid_to))

                                còn {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $deal->valid_to)->diffInDays()}} ngày

                            @else

                                Không hết hạn

                            @endif

                                </span>
                        <ul class="product-price-list">
                            @if(!empty($deal->new_price))
                                <li><span class="product-price">{{number_format($deal->new_price, 0, '.', '.')}} VNĐ</span>
                                </li>
                            @endif
                            @if(!empty($deal->original_price))
                                <li><span class="product-old-price">{{number_format($deal->original_price, 0, '.', '.')}} VNĐ</span>
                                </li>
                            @endif
                            @if(!empty($deal->new_price) && !empty($deal->original_price))
                                <li><span class="product-save">Tiết kiệm {{round(100 - $deal->new_price / $deal->original_price *100) }}%</span>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <p class="product-location"><i class="fa fa-map-marker"></i> {{\App\Provider::find($deal->source)->name }}</p>
                </div>
            </a>
        @endforeach

    </div>
    <div class="gap gap-small"></div>
    <h1 class="mb20">Sản phẩm khuyến mãi mới <small><a href="{{url('san-pham')}}">Xem tất cả</a></small></h1>
    <div class="row row-wrap">
        @foreach($latestProducts as $product)
        <a class="col-md-3" href="{{ $product->aff_link }}">
            <div class="product-thumb" style="height: 440px">
                <header class="product-header">
                    <img src="{{$product->image_preview}}" alt="{{$product->name}}" title="{{$product->name}}" style="max-height: 293px" />
                </header>
                <div class="product-inner">
                    <h5 class="product-title">{{$product->name}}</h5>

                    <div class="product-meta">
                        <ul class="product-price-list">
                            <li><span class="product-price">{{number_format($product->price, 0, '.', '.')}} VNĐ</span>
                            </li>


                        </ul>

                    </div>
                    <p class="product-location"><i class="fa fa-map-marker"></i> {{\App\Provider::find($product->source)->name }}</p>
                </div>
            </div>
        </a>
        @endforeach

    </div>
    <div class="gap"></div>
</div>
    </div>

    @endsection