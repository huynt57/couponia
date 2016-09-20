@extends('frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <aside class="sidebar-left">
                <div class="sidebar-box">
                    <h5>Phân loại theo thời gian</h5>
                    <ul class="checkbox-list">
                        <li class="checkbox">
                            <label>
                                <input type="checkbox" class="i-check">Mới <small>(50)</small>
                            </label>
                        </li>
                        <li class="checkbox">
                            <label>
                                <input type="checkbox" class="i-check">Sắp hết hạn <small>(70)</small>
                            </label>
                        </li>
                        <li class="checkbox">
                            <label>
                                <input type="checkbox" class="i-check">Phổ biến <small>(32)</small>
                            </label>
                        </li>
                        <li class="checkbox">
                            <label>
                                <input type="checkbox" class="i-check">Nổi bật<small>(27)</small>
                            </label>
                        </li>
                    </ul>
                </div>
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
                            <li><a href="#">sắp xếp theo <b>Hết hạn sớm nhất</b></a>
                            </li>
                            <li><a href="#">sắp xếp theo <b>Độ phổ biến</b></a>
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

                @foreach ($deals as $deal)



                    <a class="product-thumb product-thumb-horizontal" href="{{url('khuyen-mai', ['id'=>$deal->id])}}">
                        <header class="product-header" style="width: 50%">
                            <img src="{{$deal->image_preview}}" alt="{{$deal->name}}" title="{{$deal->name}}" />
                        </header>
                        <div class="product-inner" style="width: 50%">
                            <h5 class="product-title">{{$deal->name}}</h5>
                            <div class="product-desciption">{!! \Illuminate\Support\Str::limit($deal->description, 80, ' ...') !!}</div>
                            <div class="product-meta" style="width: 30%"><span class="product-time"><i class="fa fa-clock-o"></i> còn {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $deal->valid_to)->diffInDays()}} ngày</span>
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

            {!! $deals->render() !!}

            <div class="gap"></div>
        </div>
    </div>

</div>
    @endsection