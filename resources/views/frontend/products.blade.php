@extends('frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">

                @if(!empty($source))

                @include('frontend.side-bar', ['source' => $source])

                @else

                    @include('frontend.side-bar')

                @endif

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
                {!! $products->appends(\Illuminate\Support\Facades\Input::except('page'))->render() !!}

                <div class="gap"></div>
            </div>
        </div>

    </div>
@endsection