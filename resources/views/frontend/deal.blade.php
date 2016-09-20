
@extends('frontend')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="review-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
                <h3>Add a Review</h3>
                <form>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" placeholder="e.g. John Doe" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" placeholder="e.g. jogndoe@gmail.com" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Review</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Rating</label>
                        <ul class="icon-list icon-list-inline star-rating" id="star-rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit" />
                </form>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div>
                        <img src="{{$deal->image_preview}}" alt="Image Alternative text" title="Gamer Chick" />
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="product-info box">

                        <h3>{{\App\Provider::find($deal->source)->name }}</h3>

                        {{--<p class="product-info-price">$150</p>--}}
                        {{--<p class="text-smaller text-muted">{!! $deal->description !!}</p>--}}


                    </div>
                    <div class="product-info box">

                        <h3>{{$deal->name}}</h3>
                        {{--<p class="product-info-price">$150</p>--}}
                        {{--<p class="text-smaller text-muted">{!! $deal->description !!}</p>--}}

                        @if(!empty($deal->code))
                            <h3>Nhập mã: {{$deal->code}} để hưởng khuyến mãi</h3>
                        @endif

                        <ul class="list-inline">
                            <li><a href="{{$deal->online_url}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Xem ngay</a>
                            </li>
                            <li>
                                <button class="btn btn-primary">Copy mã</button>
                            </li>
                            <li><a href="#" class="btn"><i class="fa fa-star"></i> Lưu lại</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <div class="tabbable">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-pencil"></i>Miêu tả</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab-1">
                       {!! $deal->description !!}
                    </div>

                </div>
            </div>
            <div class="gap"></div>
            <h3>Bình luận</h3>
            <div class="fb-comments " data-href="http://bluebee-uet.com" data-numposts="5" data-width="100%"></div>
            <div class="gap"></div>
            <h3>Có thể bạn quan tâm</h3>
            <div class="gap gap-mini"></div>
            <div class="row row-wrap">
                <?php $dealsRelated = \App\Deal\Functions::getRandomDeals();?>
                @foreach ($dealsRelated as $deal)
                    <a class="col-md-6" href="{{url('khuyen-mai', ['id'=>$deal->id])}}">
                        <div class="product-thumb">
                            <header class="product-header">
                                <img src="{{$deal->image_preview}}" alt="{{$deal->name}}" title="{{$deal->name}}" />
                            </header>
                            <div class="product-inner">
                                <h5 class="product-title">{{$deal->name}}</h5>
                                <p class="product-desciption">{!! \Illuminate\Support\Str::limit($deal->description, 80, ' ...') !!}</p>
                                <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> còn {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $deal->valid_to)->diffInDays()}} ngày</span>


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
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="gap gap-small"></div>
        </div>

    </div>

</div>

    @endsection('content')