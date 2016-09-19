@extends('frontend')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="mb20" style="text-align: center;">Ưu đãi hấp dẫn từ hơn 20 nhà phân phối và hàng trăm khuyến mãi</h1>
        <div class="owl-carousel" id="owl-carousel" data-items="6">
            @foreach($providers as $provider)
            <div>
                <div class="product-thumb" style="height: 240px;">
                    <header class="product-header">
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
            </div>
            @endforeach

        </div>

    <h1 class="mb20">Khuyến mãi mới <small><a href="#">Xem tất cả</a></small></h1>
    <div class="row row-wrap">
        <a class="col-md-4" href="#">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/the_hidden_power_of_the_heart_800x600.jpg" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Beach Holidays</h5>
                    <p class="product-desciption">Praesent netus vitae hendrerit eu tellus nulla viverra</p>
                    <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 10 days 11 h remaining</span>
                        <ul class="product-price-list">
                            <li><span class="product-price">$146</span>
                            </li>
                            <li><span class="product-old-price">$256</span>
                            </li>
                            <li><span class="product-save">Save 57%</span>
                            </li>
                        </ul>
                    </div>
                    <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                </div>
            </div>
        </a>
        <a class="col-md-4" href="#">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/cascada_800x600.jpg" alt="Image Alternative text" title="cascada" />
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Adventure in Woods</h5>
                    <p class="product-desciption">Praesent netus vitae hendrerit eu tellus nulla viverra</p>
                    <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 10 days 15 h remaining</span>
                        <ul class="product-price-list">
                            <li><span class="product-price">$108</span>
                            </li>
                            <li><span class="product-old-price">$204</span>
                            </li>
                            <li><span class="product-save">Save 53%</span>
                            </li>
                        </ul>
                    </div>
                    <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                </div>
            </div>
        </a>
        <a class="col-md-4" href="#">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/hot_mixer_800x600.jpg" alt="Image Alternative text" title="Hot mixer" />
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Modern DJ Set</h5>
                    <p class="product-desciption">Praesent netus vitae hendrerit eu tellus nulla viverra</p>
                    <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 7 days 5 h remaining</span>
                        <ul class="product-price-list">
                            <li><span class="product-price">$127</span>
                            </li>
                            <li><span class="product-old-price">$288</span>
                            </li>
                            <li><span class="product-save">Save 44%</span>
                            </li>
                        </ul>
                    </div>
                    <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                </div>
            </div>
        </a>
    </div>
    <div class="row row-wrap">
        <a class="col-md-3" href="#">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/food_is_pride_800x600.jpg" alt="Image Alternative text" title="Food is Pride" />
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Best Pasta</h5>
                    <p class="product-desciption">Morbi justo turpis ornare ridiculus justo parturient mauris</p>
                    <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 3 days 35 h remaining</span>
                        <ul class="product-price-list">
                            <li><span class="product-price">$79</span>
                            </li>
                            <li><span class="product-old-price">$209</span>
                            </li>
                            <li><span class="product-save">Save 38%</span>
                            </li>
                        </ul>
                    </div>
                    <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                </div>
            </div>
        </a>
        <a class="col-md-3" href="#">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/waipio_valley_800x600.jpg" alt="Image Alternative text" title="waipio valley" />
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Awesome Vacation</h5>
                    <p class="product-desciption">Morbi justo turpis ornare ridiculus justo parturient mauris</p>
                    <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 4 days 47 h remaining</span>
                        <ul class="product-price-list">
                            <li><span class="product-price">$125</span>
                            </li>
                            <li><span class="product-old-price">$284</span>
                            </li>
                            <li><span class="product-save">Save 44%</span>
                            </li>
                        </ul>
                    </div>
                    <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                </div>
            </div>
        </a>
        <a class="col-md-3" href="#">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/the_violin_800x600.jpg" alt="Image Alternative text" title="The Violin" />
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Violin Lessons</h5>
                    <p class="product-desciption">Morbi justo turpis ornare ridiculus justo parturient mauris</p>
                    <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 3 days 43 h remaining</span>
                        <ul class="product-price-list">
                            <li><span class="product-price">$184</span>
                            </li>
                            <li><span class="product-old-price">$297</span>
                            </li>
                            <li><span class="product-save">Save 62%</span>
                            </li>
                        </ul>
                    </div>
                    <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                </div>
            </div>
        </a>
        <a class="col-md-3" href="#">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/iphone_5_ipad_mini_ipad_3_800x600.jpg" alt="Image Alternative text" title="iPhone 5 iPad mini iPad 3" />
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Electronics Big Deal</h5>
                    <p class="product-desciption">Morbi justo turpis ornare ridiculus justo parturient mauris</p>
                    <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i>  2 h remaining</span>
                        <ul class="product-price-list">
                            <li><span class="product-price">$75</span>
                            </li>
                            <li><span class="product-old-price">$121</span>
                            </li>
                            <li><span class="product-save">Save 62%</span>
                            </li>
                        </ul>
                    </div>
                    <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                </div>
            </div>
        </a>
    </div>
    <div class="gap gap-small"></div>
    <h1 class="mb20">Sản phẩm mới <small><a href="#">Xem tất cả</a></small></h1>
    <div class="row row-wrap">
        <a class="col-md-4" href="#">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/aspen_lounge_chair_800x600.jpg" alt="Image Alternative text" title="Aspen Lounge Chair" />
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Aspen Lounge Chair</h5>
                    <p class="product-desciption">Nec dapibus at facilisis euismod senectus magnis erat</p>
                    <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 1 day 60 h remaining</span>
                        <ul class="product-price-list">
                            <li><span class="product-price">$49</span>
                            </li>
                            <li><span class="product-old-price">$136</span>
                            </li>
                            <li><span class="product-save">Save 36%</span>
                            </li>
                        </ul>
                    </div>
                    <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                </div>
            </div>
        </a>
        <a class="col-md-4" href="#">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Playstation Accessories</h5>
                    <p class="product-desciption">Nec dapibus at facilisis euismod senectus magnis erat</p>
                    <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 8 days 59 h remaining</span>
                        <ul class="product-price-list">
                            <li><span class="product-price">$77</span>
                            </li>
                            <li><span class="product-old-price">$119</span>
                            </li>
                            <li><span class="product-save">Save 65%</span>
                            </li>
                        </ul>
                    </div>
                    <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                </div>
            </div>
        </a>
        <a class="col-md-4" href="#">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/nikon_prime_love_800x600.jpg" alt="Image Alternative text" title="Nikon Prime love" />
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Best Camera Lenthes</h5>
                    <p class="product-desciption">Nec dapibus at facilisis euismod senectus magnis erat</p>
                    <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 4 days 32 h remaining</span>
                        <ul class="product-price-list">
                            <li><span class="product-price">$82</span>
                            </li>
                            <li><span class="product-old-price">$142</span>
                            </li>
                            <li><span class="product-save">Save 58%</span>
                            </li>
                        </ul>
                    </div>
                    <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                </div>
            </div>
        </a>
    </div>
    <div class="gap"></div>
</div>
    </div>

    @endsection