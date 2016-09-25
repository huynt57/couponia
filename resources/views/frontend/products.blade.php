@extends('frontend')

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

                        <?php $providers = \App\Deal\Functions::getProvidersByAdmin()?>
                        @foreach($providers as $provider)
                            <li><a href="{{url('san-pham/nha-phan-phoi', ['slug'=> str_slug($provider->name),'id'=>$provider->id]) }}">{{$provider->name}}<span>{{\App\Deal\Functions::countProductByProvider($provider->id)}}</span></a>
                            </li>
                        @endforeach

                    </ul>

                    <div class="sidebar-box">
                        <h5>Lọc theo giá</h5>

                        <form id="form-filter-price">

                            <div class="form-group mb10">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" id="price-slider">
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 15px">
                                    <div class="col-md-6">  <input type="text" class="form-control" name="min_price" id="min_price"></div>
                                    <div class="col-md-6"> <input type="text" class="form-control" name="max_price" id="max_price"></div>
                                </div>


                            </div>
                            <p class="mb10" id="submit-filter-price"></p>
                            <button type="button" class="btn btn-primary" value="Đăng ký" id="btn-submit-filter-price">Tìm</button>
                        </form>

                    </div>

                    {{--<div class="sidebar-box">--}}
                        {{--<h5>Phân loại theo thời gian</h5>--}}
                        {{--<ul class="checkbox-list">--}}
                            {{--<li class="checkbox">--}}
                                {{--<label>--}}
                                    {{--<input type="checkbox" class="i-check">Mới <small>(50)</small>--}}
                                {{--</label>--}}
                            {{--</li>--}}
                            {{--<li class="checkbox">--}}
                                {{--<label>--}}
                                    {{--<input type="checkbox" class="i-check">Sắp hết hạn <small>(70)</small>--}}
                                {{--</label>--}}
                            {{--</li>--}}
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
                        {{--</ul>--}}
                    {{--</div>--}}
                </aside>


            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-sort">
                            <span class="product-sort-selected">sắp xếp theo <b>Giá</b></span>
                            <a href="#" class="product-sort-order fa fa-angle-down"></a>
                            <ul>
                                <li><a href="#">sắp xếp theo <b>Tên</b></a>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-7">
                        <div class="product-view pull-right">
                            <a class="fa fa-th-large active" href="#"></a>
                            <a class="fa fa-list" href="category-page-thumbnails-coupon-horizontal.html"></a>
                        </div>
                    </div>
                </div>
                <div class="row row-wrap">
                    @foreach ($products as $product)
                        <a class="col-md-4" href="{{ $product->aff_link }}">
                            <div class="product-thumb" style="height: 420px">
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
                @if(isset($productSearchPagination))
                    {!! $productSearchPagination->appends(\Illuminate\Support\Facades\Input::except('page'))->render() !!}
                @else
                    {!! $products->appends(\Illuminate\Support\Facades\Input::except('page'))->render() !!}
                @endif

                <div class="gap"></div>
            </div>
        </div>

    </div>
@endsection