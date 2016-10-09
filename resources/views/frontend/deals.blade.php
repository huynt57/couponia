@extends('frontend')
@section('title')
Canhgiamgia.com | Khuyến mại hot nhất từ lazada, tiki, adayroi, ...
@endsection
@section('facebook_meta')
    <meta property="og:url" content="http://canhgiamgia.com/khuyen-mai">
    <meta property="og:image" content="{{public_path('coupon/logo.png')}}">
    <meta property="og:description" content="Canhgiamgia.com | Khuyến mại từ Lazada, Tiki, Adayroi, ...">
    <meta property="og:title" content="Canhgiamgia.com | Sản phẩm khuyến mại từ Lazada, Tiki, Adayroi, ...">
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <aside class="sidebar-left">


                @if(isset($productSearchPagination) || isset($dealSearchPagination))
                    <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
                        <li><a href="{{url('tim-kiem/khuyen-mai?q='.$query)}}">Tìm khuyến mại</a>
                        </li>
                        <li><a href="{{url('tim-kiem/san-pham?q='.$query)}}">Tìm sản phẩm</a>
                        </li>
                    </ul>
                @endif
                <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
                        <?php $providers = \App\Deal\Functions::getProviders();?>

                        @foreach($providers as $provider)
                            <li><a href="{{url('khuyen-mai/nha-phan-phoi', ['slug'=> str_slug($provider->name),'id'=>$provider->id]) }}">{{$provider->name}}<span>{{\App\Deal\Functions::countDealByProvider($provider->id)}}</span></a>
                            </li>
                        @endforeach

                </ul>
                <div class="sidebar-box">
                    <h5>Phân loại theo thời gian</h5>
                    <ul class="checkbox-list">
                        <li class="checkbox">
                            <label>
                                <input type="checkbox" class="i-check" data-go="latest">Mới
                            </label>
                        </li>
                        <li class="checkbox">
                            <label>
                                <input type="checkbox" class="i-check" data-go="nearly-end">Sắp hết hạn
                            </label>
                        </li>
                        {{--<li class="checkbox">--}}
                            {{--<label>--}}
                                {{--<input type="checkbox" class="i-check">Phổ biến <small>(32)</small>--}}
                            {{--</label>--}}
                        {{--</li>--}}
                        {{--<li class="checkbox">--}}
                            {{--<label>--}}
                                {{--<input type="checkbox" class="i-check">Nổi bật<small>(27)</small>--}}
                            {{--</label>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </aside>

        </div>
        <div class="col-md-9">
            <div class="row">
                {{--<div class="col-md-3">--}}
                    {{--<div class="product-sort">--}}
                        {{--<span class="product-sort-selected">sắp xếp theo <b>Thời gian</b></span>--}}
                        {{--<a href="#" class="product-sort-order fa fa-angle-down" id="sort-by-id"></a>--}}
                        {{--<ul>--}}
                            {{--<li><a href="#" id="sort-by-date">sắp xếp theo <b>Hết hạn sớm nhất</b></a>--}}
                            {{--</li>--}}



                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-2 col-md-offset-7">--}}
                    {{--<div class="product-view pull-right">--}}
                        {{--<a class="fa fa-th-large active" href="#"></a>--}}
                        {{--<a class="fa fa-list" href="category-page-thumbnails-coupon-horizontal.html"></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>

                @foreach ($deals as $deal)



                    <a class="product-thumb product-thumb-horizontal" href="{{url('khuyen-mai', ['id'=>$deal->id])}}">
                        <header class="product-header">
                            <img src="{{$deal->image_preview}}" alt="{{$deal->name}}" title="{{$deal->name}}" />
                        </header>
                        <div class="product-inner">
                            <h5 class="product-title">{{$deal->name}}</h5>
                            <div class="product-desciption">{!! \Illuminate\Support\Str::limit($deal->description, 80, ' ...') !!}</div>
                            <div class="product-meta" style="width: 30%"><span class="product-time"><i class="fa fa-clock-o"></i>

                                    @if(!empty($deal->valid_to))


                                        @if(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $deal->valid_to)->diffInDays() >= 1)

                                            <i class="fa fa-clock-o"></i> còn {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $deal->valid_to)->diffInDays()}} ngày</span>

                                @else
                                    <i class="fa fa-clock-o"></i> còn {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $deal->valid_to)->diffInHours()}} giờ</span>
                                @endif

                                @else
                                    <i class="fa fa-clock-o"></i> Không hết hạn</span>
                                    @endif


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


            @if(isset($dealSearchPagination))
            {!! $dealSearchPagination->appends(\Illuminate\Support\Facades\Input::except('page'))->render() !!}
            @else
                {!! $deals->appends(\Illuminate\Support\Facades\Input::except('page'))->render() !!}
                @endif

            <div class="gap"></div>
        </div>
    </div>

</div>
    @endsection