@extends('frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('frontend.side-bar', ['categories'=>2])


            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-sort">
                            <span class="product-sort-selected">sort by <b>Price</b></span>
                            <a href="#" class="product-sort-order fa fa-angle-down"></a>
                            <ul>
                                <li><a href="#">sort by Name</a>
                                </li>
                                <li><a href="#">sort by Ended Soon</a>
                                </li>
                                <li><a href="#">sort by Popularity</a>
                                </li>
                                <li><a href="#">sort by Location</a>
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
                        <a class="col-md-4" href="{{$product->aff_link}}">
                            <div class="product-thumb" style="height: 440px">
                                <header class="product-header">
                                    <img src="{{$product->image_preview}}" alt="{{$product->name}}" title="{{$product->name}}" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title">{{$product->name}}</h5>

                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">{{number_format($product->price, 0, '.', '.')}}</span>
                                            </li>


                                        </ul>
                                    </div>
                                    <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                {!! $products->render() !!}

                <div class="gap"></div>
            </div>
        </div>

    </div>
@endsection