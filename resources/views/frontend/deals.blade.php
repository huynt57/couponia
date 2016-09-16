@extends('frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <aside class="sidebar-left">
                <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
                    <li class="active"><a href="#"><i class="fa fa-ticket"></i>All<span>36</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-cutlery"></i>Food & Drink<span>36</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-calendar"></i>Events<span>40</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-female"></i>Beauty<span>38</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-bolt"></i>Fitness<span>43</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-headphones"></i>Electronics<span>37</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-image"></i>Furniture<span>32</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-umbrella"></i>Fashion<span>48</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i>Shopping<span>45</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-home"></i>Home & Graden<span>31</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-plane"></i>Travel<span>49</span></a>
                    </li>
                </ul>




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
            <div class="row row-wrap">
                @foreach ($deals as $deal)
                <a class="col-md-6" href="{{url('khuyen-mai', ['id'=>$deal->id])}}">
                    <div class="product-thumb" style="height: 350px;">
                        <header class="product-header">
                            <img src="{{$deal->image_preview}}" alt="Image Alternative text" title="Hot mixer" />
                        </header>
                        <div class="product-inner">
                            <h5 class="product-title">{{$deal->name}}</h5>
                            <p class="product-desciption">{!! \Illuminate\Support\Str::limit($deal->description, 80, ' ...') !!}</p>
                            <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> còn {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $deal->valid_to)->diffInDays()}} ngày</span>
                                <ul class="product-price-list">
                                    <li><span class="product-price">{{number_format($deal->new_price, 0, '.', '.')}} VNĐ</span>
                                    </li>
                                    <li><span class="product-old-price">{{number_format($deal->original_price, 0, '.', '.')}} VNĐ</span>
                                    </li>
                                    <li><span class="product-save">Tiết kiệm {{round(100 - $deal->new_price / $deal->original_price *100) }}%</span>
                                    </li>
                                </ul>
                            </div>
                            <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                        </div>
                    </div>
                </a>
                @endforeach
                </div>
            {!! $deals->render() !!}

            <div class="gap"></div>
        </div>
    </div>

</div>
    @endsection