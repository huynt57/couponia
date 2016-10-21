@extends('frontend')
@section('title')
    Canhgiamgia.com | Khuyến mại hot nhất từ lazada, tiki, adayroi, ...
@endsection
@section('facebook_meta')
    <meta property="og:url" content="http://canhgiamgia.com/khuyen-mai">
    <meta property="og:image" content="{{public_path('coupon/logo.png')}}">
    <meta property="og:description" content="Canhgiamgia.com | Tin tức khuyến mại">
    <meta property="og:title" content="Canhgiamgia.com | Tin tức khuyến mại">
@endsection
@section('google_meta')

    <meta name="keywords" content="khuyến mãi, lazada, tiki, adayroi, thời trang, làm đẹp, giảm giá" />
    <meta name="description" content="Canhgiamgia.com | Khuyến mại từ Lazada, Tiki, Adayroi, ...">
    <meta name="author" content="canhgiamgia.com">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!-- BLOG POST -->
            @foreach($posts as $post):
            <article class="post">
                <header class="post-header">
                    <!-- HOVER IMAGE -->
                    <a class="hover-img" href="{{url('tin-tuc', ['id' => $post->id])}}">
                        <img src="{{$post->image}}" alt="Image Alternative text" title="4 Strokes of Fun" /><i class="fa fa-link hover-icon"></i>
                    </a>
                </header>
                <div class="post-inner">
                    <h4 class="post-title"><a href="{{url('tin-tuc', ['id' => $post->id])}}">{{ $post->title }}</a></h4>
                    <ul class="post-meta">
                        <li><i class="fa fa-calendar"></i><a href="#">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->toDateString()}}</a>
                        </li>
                        <li><i class="fa fa-user"></i><a href="#">canhgiamgia.com</a>
                        </li>
                        {{--<li><i class="fa fa-tags"></i><a href="#">Digital</a>, <a href="#">Typography</a>--}}
                        {{--</li>--}}
                        {{--<li><i class="fa fa-comments"></i><a href="#">5 Comments</a>--}}
                        {{--</li>--}}
                    </ul>
                    <p class="post-desciption">{{$post->desc}}</p><a class="btn btn-small btn-primary" href="{{url('tin-tuc', ['id' => $post->id])}}">Đọc thêm</a>
                </div>
            </article>
            <!-- BLOG POST -->
            @endforeach

            {!! $posts->appends(\Illuminate\Support\Facades\Input::except('page'))->render() !!}
            <div class="gap"></div>
        </div>
    </div>

</div>
@endsection